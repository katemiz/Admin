<x-layout title="denmeme">

    <style>
    .hero.has-background {
        position: relative;
        overflow: hidden;
      }
      .hero-background {
        position: absolute;
        object-fit: cover;
        object-position: center center;
        width: 100%;
        height: 100%;
      }
      .hero-background.is-transparent {
        opacity: 0.3;
      }

    </style>

      







<section class="section container">
<div class="columns">

    <div class="column is-half">
        <h1 class="title has-text-weight-light is-size-1 has-text-left">{{ config('appconstants.app.name') }}</h1>

        <figure class="image is-1by1">
            <img src="images/superhero.svg" alt="admin: your super hero">
        </figure>
    </div>



    <div class="column content">

        <h1 class="subtitle has-text-weight-light">{{ config('appconstants.app.welcome_greeter') }}</h1>

        <p class="mb-3">{{ config('appconstants.app.welcome_explanation') }}</p>

        <p class="mb-3"></p>

        <ul>
            <li>Apps Management</li>
            <li>User Management</li>
            <li>Role Management</li>
            <li>Permissions Management</li>
            <li>Projects Management</li>
        </ul>

    </div>

</div>
</section>
</x-layout>

