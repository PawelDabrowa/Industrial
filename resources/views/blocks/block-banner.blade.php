{{--
  Title: Block Banner
  Category: common
  Icon: awards
--}}

<section data-{{ $block['id'] }} id="{{ $block['id'] }}" class="{{ $block['classes'] }}" @if(get_field('background_image')) style="background-image: url({{ get_field('background_image') }})" @endif role="img">
  <div class="container flex">
    <h1 class="heading heading--1">
      @if(get_field('title')) 
        {!! get_field('title') !!}
      @endif
    </h1>
  </div>
</section>