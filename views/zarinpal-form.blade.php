<form id="goto_zarinpal_bank" class="form-horizontal goto-bank-form" method="GET" action="{!! $endPoint !!}">
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn btn-success">{{$submitLabel}}</button>
        </div>
    </div>
</form>

@if($autoSubmit === true)
<script type="text/javascript">
	var f=document.getElementById('goto_zarinpal_bank');
  f.submit();
</script>
@endif