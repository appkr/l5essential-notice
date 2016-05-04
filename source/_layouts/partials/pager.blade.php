<nav id="pagination">
  <ul class="pager {{ $class }}">
    <li class="previous {{ $prev === false ? 'disabled' : ''}}">
      <a href="{{ $prev !== false ? $prev : '#'}}">
        <span class="pager-title-sm">
          <i class="material-icons">keyboard_arrow_left</i>
        </span>
        <span class="pager-title">
          {{ $prev !== false ? str_limit($lessons[$current_index - 1]['title'], 20) : '' }}
        </span>
      </a>
    </li>
    <li class="next {{ $next === false ? 'disabled' : ''}}">
      <a href="{{ $next !== false ? $next : '#' }}">
        <span class="pager-title">
          {{ $next !== false ? str_limit($lessons[$current_index + 1]['title'], 20) : '' }}
        </span>
        <span class="pager-title-sm">
          <i class="material-icons">keyboard_arrow_right</i>
        </span>
      </a>
    </li>
  </ul>
</nav>