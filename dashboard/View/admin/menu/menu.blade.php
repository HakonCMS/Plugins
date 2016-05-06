{{ Html::Hook("Core::Admin::Template::Menu::Item::Before", "dashboard") }}
<li>
    <a href="{{ URL::Route('hakon::dashboard') }}" class="waves-effect active"><i class="ti-home"></i> <span> Dashboard </span> </a>
</li>
{{ Html::Hook("Core::Admin::Template::Menu::Item::After", "dashboard") }}