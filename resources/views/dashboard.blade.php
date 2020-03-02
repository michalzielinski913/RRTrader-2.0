
@extends('head')
@extends('menu')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               
                   
                        <div class="panel-body">
                        
							
<center>Jest to statyczna wersja pokazowa wersji v2.0 projektu RRTrader. Strona docelowo ma zostać udostępniona nie tylko dla Polskich graczy stąd interfejs jest pisany po angielsku.</center>
<center>Zachęcam do subskrypcji gazety aby być na bieżąco <a href="https://rivalregions.com/#newspaper/show/137143">[pc]</a> <a href="https://m.rivalregions.com/#newspaper/show/137143">[mobile]</a></center>
</br>

<h2>Alpha 0.0.3</h2>
-Wprowadzono prototyp kokpitu użytkownika pod adresem /profile<br>
-Podpięto bazę danych do zakładek premium, gold, surowce, generator<br>
-Wprowadzono widoki rejestracji i logowania <br>
-Wprowadzono prototyp systemu sesyjnego DB <br>
<br>
<h3>Alpha 0.0.2</h3>
-Zablokowano wykresy dla urządzeń mobilnych</br>
-Metody view kontrolerów premium i surowców zwracają teraz pokazowe zdefiniowane zestawy danych (nie wpływają one na wykresy)</br>
-Poprawiono literówki</br>
-Naprawiono błąd który umożliwiał horyzontalny scroll</br>
-Naprawiono łańcuch SSL</br>
</br>
<h3>Alpha 0.0.1</h3>
-Wprowadzono grupowanie tras dla premium i surowców</br>
-Wprowadzono kontroler dla premium i surowców</br>
-Naprawiono błąd który uniemożliwiał w niektórych widokach zwijanie paska nawigacyjnegoi otwieranie zakładki profilu</br>
	   </br>
	   Następnym etapem prac jest przygotowanie szkicu struktury bazodanowej i przystosowanie jej do migracji Artisan i kwerend Eloquent, równolegle będą się pojawiały nowe widoki. Obecnym priorytetem w tym zakresie jest kokpit użytkownika.
                  </div>
                        <!-- /.panel-body -->
                  
                    <!-- /.panel -->
               
                <!-- /.col-lg-18 -->
            </div>
			</div>
@endsection