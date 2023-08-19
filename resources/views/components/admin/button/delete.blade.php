<form action="{{$action}}" method="POST" class="d-inline-block">
    @csrf
    <input type="hidden" name="id" value="{{$row->id}}"/>
    <button type="button"  class="flex bg-meta-7 hover:bg-danger p-2 text-white rounded border border-danger show_confirm">
        <x-icon.delete></x-icon.delete>
        <span class="ml-1">Delete</span>
    </button>
</form>