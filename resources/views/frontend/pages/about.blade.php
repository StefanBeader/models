@extends('layouts.frontend')

@section('main')
    <div id="about">
        <div class="container">
            <section>
                <h1>About</h1>
                <div class="about-text">
                    <p>We are D Model Management, modeling agency based in Novi Sad, Serbia, founded in September 2019
                        by Dragana Živković and Doris Turčinović Dameski.</p>
                    <p>We are representing international
                        models and looking for new fresh faces.</p>
                    <p>Our passion and goal is to develop great careers to our
                        models connecting them to the major international agencies and clients.</p>
                    <p>Our vision is to become one big family and together build our way up in the industry.</p>
                </div>
            </section>
            <section>
                <h2>Team</h2>
                <div class="members">
                    <div style="width: 50%;">
                        <div class="member">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/img/dragana.jpg') }}" alt="">
                            </div>
                            <h4>Dragana Živković</h4>
                            <p>Dragana Živković is Serbian established commercial and fashion photographer with
                                exceptional portfolio of thousands photographs published all around the world, used in
                                numerous campaigns, advertisements and billboards (BBC, Oprah, Chase bank, Johnson's,
                                Libresse, Iyanla Vanzant, Romper, Elite Daily, Yahoo, America Magazine,
                                Mivela, Tesla...).
                                Through her 10 years' experience behind the camera and working with models she
                                excelled her skills for organising the set, costume, scene, models and retouching.
                                Her best quality is her passion for photography together with capability of presenting
                                imperfect as perfect. Through the lens she's playing with styles, combining and mixing
                                different forms and items in a way that is ahead of her time. With her profound sense
                                for beauty and composition she will accent model's talent, movement, emotion,
                                transformation and attitude just in the right way. Because good photographs are model's
                                ID and the ticket for the industry.</p>
                        </div>
                    </div>
                    <div style="width: 50%;">
                        <div class="member">
                            <div class="img-holder">
                                <img src="{{ asset('frontend/img/doris.jpg') }}" alt="">
                            </div>
                            <h4>Doris Turčinović Dameski</h4>
                            <p>Doris Turčinović Dameski is a Serbian top model with over 10 years'
                                international experience on the fashion scene
                                (Belgrade, Milano, Istanbul, New York, Miami, Los Angeles).
                                She started her career as the 'Miss Novi Sad', the face and COVER girl of
                                "Lepota&Zdravlje" magazine which gave her the opportunity to enter the fashion
                                world walking the runway for all prestigious Serbian designers, to be a part of every
                                domestic fashion event, to do numerous TV commercials, music videos and catalog,
                                all of which during her studies. She continues her career in Milan and New York,
                                LA and Miami collaborating with international brands such as Kiton, Lee Jeans, ForAll7,
                                Yammamay, Mango, Monsoon, Lancome, PinUp... Along the way she's making personal
                                connections with influential and important people in fashion world which now can
                                contribute towards the agency.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection