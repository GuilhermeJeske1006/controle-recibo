@component('signature.body')

   <!-- Header -->
   <header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Registrar-se</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->


<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Registrar-se</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->


<!-- Privacy Content -->
<div class="ex-basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
   
                <div class="row">

                    <livewire:components.signature.form>
                </div> <!-- end of row -->
                <a class="btn-outline-reg" href="{{ route('home') }}">VOLTAR</a>
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->


 
@endcomponent