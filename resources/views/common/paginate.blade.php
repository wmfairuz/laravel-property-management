{!! with(new App\Helpers\PaginationHelper($object->setPath('')->appends(Request::except('page'))))->render() !!}