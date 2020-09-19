<x-html title="" >
  <x-slot name="head">
    <link rel="icon" href="favicon.ico" />
    <link href=""type="text/css" rel="stylesheet" >
  </x-slot>
  <x-social-meta
    title=""
    description=""
    image=""
  />
  <x-alert class="" />
  <x-alert class="" />

  </x-alert>
  <x-form-button :action="" class="">

  </x-form-button>
  <x-logout class="" />
  <x-logout :action="" class="" />
  <x-carbon :date="" human class="" />
  <x-carbon :date="" format="d/m/Y H:i" human class="" />
  <x-countdown :expires=""/>
  <x-easy-mde name=""/>
  <x-easy-mde name="" :options="[sss => 'd']"/>
  <x-trix name="" />
  <x-trix name="" styles=""/>
  <x-error field="" class="" />
  <x-error field="" class="">
    <ul>
      @foreach ($component->messages($errors) as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </x-error>
  <x-form action="">

  </x-form>
  <x-form method="put" action="">

  </x-form>
  <x-label for="" />
  <x-label for="">

  </label>
  <x-checkbox name="" />
  <x-color-picker name="" />
  <x-color-picker name="" :options="" />
  <x-email name="" />
  <x-input name="" />
  <x-password name="" />
  <x-pickaday name="" />
  <x-pickaday name="" :options="" />
  <x-textarea name="" />
  <x-textarea name="" rows="" >

  </textarea>
  <x-mapbox :markers="" :options=""/>
  <x-markdown name="" flavor="github" :options="">

  </x-markdown>
  <x-toc>

  </x-toc>
  <x-dropdown class="">
    <x-slot name="trigger">
      <button>

      </button>
    </x-slot>

    <a href="#"></a>
    <a href="#"></a>
  </x-dropdown>
  <x-dropdown @keydown.escape.window="open = false" class="">
    <x-slot name="trigger">
      <button>

      </button>
    </x-slot>

    <a href="#"></a>
    <a href="#"></a>
  </x-dropdown>
  <x-avatar search="" provider="" />
  <x-cron schedule="" human />
  <x-unsplash proto="" ttl="" />
  <x-unsplash query="" username="" ttl="" featured />
</x-html>
