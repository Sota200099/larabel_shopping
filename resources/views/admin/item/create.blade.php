<h2>{{ __('Item Input') }}</h2>
<a href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>

<form action="{{ route('admin.item.add') }}" method="post">
  @csrf

  <div class="form-floating mb-3">
    <input class="form-control" type="text" name="name">
    <label for="">{{ __('label.item_name') }}</label>
  </div>
  <div class="form-floating mb-3">
    <input class="form-control" type="text" name="code">
    <label for="">{{ __('label.item_code') }}</label>
  </div>
  <div class="form-floating mb-3">
    <input class="form-control" type="number" name="price">
    <label for="">{{ __('label.price') }}</label>
  </div>

  <button>{{ __('Update') }}</button>
</form>