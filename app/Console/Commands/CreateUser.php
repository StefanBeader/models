<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new User';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask("Enter your name");
        $email = $this->ask("Enter your email address");
        $password = $this->secret("Enter password");
        $passwordConfirm = $this->secret("Confirm password");

        if ($password === $passwordConfirm) {
            $this->validateData(compact('email', 'password'));
            $this->createUser(compact('name', 'email', 'password'));
        } else {
            $this->error('Password misspelled');
        }
        return true;
    }

    /**
     * @param array $data
     * @return bool
     */
    private function validateData(array $data): bool
    {
        $validator = Validator::make([
            'email' => $data['email'],
            'password' => $data['password'],
        ], [
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        if ($validator->fails()) {
            $this->info('User not created. See error messages below:');

            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return false;
        }
        return true;
    }

    private function createUser(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        $this->info('User created');
    }
}
