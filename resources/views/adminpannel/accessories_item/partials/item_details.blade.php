<ul class="order_ul" style="list-style: none;"> 
  @if($item->featured==1)
  <li>
    <span class="label label-info">
      Featured
    </span>
  </li>
  @else
  <li>
    <span class="label label-info">
      Not Featured
    </span>
  </li>
  @endif
  @if($item->coming_soon==0)
  <li>
    <span class="label label-info">
      Coming Soon
    </span>
  </li>
  @else
  <li>
    <span class="label label-info">
      Available
    </span>
  </li>
  @endif
   @if($item->item_status==0)
  <li>
    <span class="label label-info">
      Hide
    </span>
  </li>
  @else
  <li>
    <span class="label label-info">
      Show
    </span>
  </li>
  @endif
</ul>