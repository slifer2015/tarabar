@extends('main.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h3>{{trans('language.orderFormHeader')}}</h3>
            </div>
            <div class="col-sm-6">
                {!! Form::open(['route'=>'orderSubmit','method'=>'post']) !!}
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
                    <label for="fax">{{trans('language.orderFormFax')}}</label>
                    <input type="text" id="fax" name="fax" class="form-control" value="{{old('fax')}}">
                </div>
                <div class="form-group">
                    <label for="description">{{trans('language.orderFormDescription')}}</label>
                    <textarea rows="5" id="description" name="description" class="form-control">{{old('description')}}</textarea>
                </div>
                <div class="page-header">
                    <h3>{{trans('language.orderFormServiceHeader')}}</h3>
                    <h5>{{trans('language.orderFormServiceNote')}}</h5>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label><input type="checkbox" name="services[]" value="Sea Freight">{{trans('language.orderFormSea')}}</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="services[]" value="Air Freight">{{trans('language.orderFormAir')}}</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="services[]" value="Overland Transportion">{{trans('language.orderFormOverland')}}</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="services[]"
                                      value="Multimodal Transport">{{trans('language.orderFormMultimodal')}}</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label><input type="checkbox" name="services[]"
                                      value="Customs Clearance and Delivery">{{trans('language.orderFormCustoms')}}
                        </label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="services[]" value="Project Cargo">{{trans('language.orderFormProject')}}
                        </label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="services[]" value="Warehousing">{{trans('language.orderFormWarehousing')}}
                        </label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="services[]" value="Value Added Services">{{trans('language.orderFormValue')}}
                        </label>
                    </div>
                </div>

                <h5>{{trans('language.orderFormIsClient')}}</h5>
                <label class="radio-inline"><input type="radio" name="is_client" value="1">{{trans('language.orderFormYes')}}</label>
                <label class="radio-inline"><input type="radio" name="is_client" value="0">{{trans('language.orderFormNo')}}</label>

                <h5>{{trans('language.orderFormHearAbout')}}</h5>
                <label class="radio-inline"><input type="radio" name="hear_about" value="Word Of Mouth">{{trans('language.orderFormWord')}}</label>
                <label class="radio-inline"><input type="radio" name="hear_about" value="Publication">{{trans('language.orderFormPublication')}}</label>
                <label class="radio-inline"><input type="radio" name="hear_about" value="Websites / Internet">{{trans('language.orderFormWebsites')}}</label>
                <label class="radio-inline"><input type="radio" name="hear_about" value="Other">{{trans('language.orderFormOther')}}</label>

                <h5>{{trans('language.orderFormRespond')}}</h5>
                <label class="radio-inline"><input type="radio" name="respond" value="Phone">{{trans('language.orderFormRespondPhone')}}</label>
                <label class="radio-inline"><input type="radio" name="respond" value="Fax">{{trans('language.orderFormRespondFax')}}</label>
                <label class="radio-inline"><input type="radio" name="respond" value="Email">{{trans('language.orderFormRespondEmail')}}</label>
                <label class="radio-inline"><input type="radio" name="respond" value="Visit">{{trans('language.orderFormRespondVisit')}}</label>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">{{trans('language.orderFormSubmit')}}</button>
                    <button type="reset" class="btn btn-info">{{trans('language.orderFormReset')}}</button>
                </div>

                </form>
            </div>
        </div>
    </div>
@endsection