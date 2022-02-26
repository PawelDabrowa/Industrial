{{--
  Title: Block Showcase
  Category: common
  Icon: awards
--}}

<section data-{{ $block['id'] }} id="{{ $block['id'] }}" class="{{ $block['classes'] }}" >
  <div class="block-showcase__wrapper">
    <div class="block-showcase__media">
      <div class="block-showcase__text">
        <div class="block-showcase__text--inner">
        <img class="block-showcase__text--icon" src="@asset('images/svg/peace.svg')"/>
        <p>{!! get_field('text') !!}</p>
        </div>
      </div>
    </div>
  </div>
</section>