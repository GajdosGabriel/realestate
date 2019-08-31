@if($id == 0){{ 'Not reached yet' }}
@elseif($id == 1){{ 'Don\'t call' }}
@elseif($id == 2){{ 'Call back' }}
@elseif($id == 3){{ 'Hot client' }}
@elseif($id == 5){{ 'TDO client' }}
@else{{ 'Already client' }}
@endif