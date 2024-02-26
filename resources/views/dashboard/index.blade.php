@extends('dashboard.layout.main')
@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    {{ __('Xush Kelibsiz!') }}
        <h1 class="text-center">Doimiy bajarilgan ishlar to'g'risida Texnik Jurnal</h1>
    {{-- <form action="post">
        <!-- TinyMCE Editor -->
        <textarea class="tinymce-editor" id="ttextarea">
            <table style="border-collapse: collapse; width: 100.056%; height: 322.35px;" border="1"><colgroup><col style="width: 24.9675%;"><col style="width: 12.5298%;"><col style="width: 12.5298%;"><col style="width: 16.5849%;"><col style="width: 20.9124%;"><col style="width: 12.4377%;"></colgroup>
                <tbody>
                <tr style="height: 71.575px;">
                <td style="height: 143.15px; text-align: center;" rowspan="2"><span style="font-family: 'times new roman', times, serif; font-size: 14pt;">Sana</span></td>
                <td style="height: 71.575px; text-align: center;" colspan="2"><span style="font-family: 'times new roman', times, serif; font-size: 14pt;">Vaqt</span></td>
                <td style="height: 143.15px; text-align: center;" rowspan="2"><span style="font-family: 'times new roman', times, serif; font-size: 14pt;">Aloqa yo'nalishlari</span></td>
                <td style="height: 143.15px; text-align: justify;" rowspan="2"><span style="font-family: 'times new roman', times, serif; font-size: 14pt;">O'tkazilgan ishlar, buzilishlar sababi haqida ma'lumotlar aloqa sifati yomonlashishi, kanallar aparatlar va boshqa almashtirishlar</span></td>
                <td style="text-align: center; height: 143.15px;" rowspan="2"><span style="font-family: 'times new roman', times, serif; font-size: 14pt;">Izoh</span></td>
                </tr>
                <tr style="height: 71.575px;">
                <td style="height: 71.575px; text-align: center;"><span style="font-family: 'times new roman', times, serif; font-size: 14pt;">Boshlanishi</span></td>
                <td style="text-align: center; height: 71.575px;"><span style="font-family: 'times new roman', times, serif; font-size: 14pt;">Tugashi</span></td>
                </tr>
                <tr style="height: 22.4px;">
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                </tr>
                <tr style="height: 22.4px;">
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                </tr>
                <tr style="height: 22.4px;">
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                </tr>
                <tr style="height: 22.4px;">
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                </tr>
                <tr style="height: 22.4px;">
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                </tr>
                <tr style="height: 22.4px;">
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                <td style="height: 22.4px;">&nbsp;</td>
                </tr>
                </tbody>
                </table>
                <p>&nbsp;</p>
          </textarea><!-- End TinyMCE Editor -->
          

                <input class="form-control col-md-6 my-3 " type="text" placeholder="Iltimos shifrlangan shaxsiy imzoyingizni kiriting.">
                <input class="form-control col-md-6 my-3 " type="date" placeholder="Iltimos shifrlangan shaxsiy imzoyingizni kiriting.">
                
            
          <button class="btn btn-primary center">Saqlash</button>
    </form> --}}
   
</div>
<script type="text/javascript">
tinyMCE.init({
    selector:"#ttextarea",
   mode: "textareas",
   theme: "simple",
   oninit: "postInitWork",
   theme_advanced_background_colors: "FF00FF,FFFF00,000000"
});

    </script>
@endsection