<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-newspaper-o"></i>
        {{trans('language.contactFormHeader')}}
    </div>
    <div class="panel-body">
            {!! Form::open(['route'=>'store.contact','method'=>'post']) !!}
            <div class="form-group">
                <label for="name">{{trans('language.orderFormName')}}</label>
                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="company">{{trans('language.orderFormCompany')}}</label>
                <input type="text" id="company" name="company" class="form-control" value="{{old('company')}}">
            </div>
            <div class="form-group">
                <label for="email">{{trans('language.orderFormEmail')}}</label>
                <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="phone">{{trans('language.orderFormPhone')}}</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{old('phone')}}">
            </div>

            <div class="form-group">
                <label for="description">{{trans('language.orderFormDescription')}}</label>
                <textarea rows="5" id="description" name="description" class="form-control">{{old('description')}}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">{{trans('language.orderFormSubmit')}}</button>
                <button type="reset" class="btn btn-info">{{trans('language.orderFormReset')}}</button>
            </div>

            </form>
    </div>
</div>

