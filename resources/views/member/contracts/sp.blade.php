@extends('member/contracts/_layout')

@section('content')
    {{-- Slovak title header --}}
    <h2 class="text-center">
        ZMLUVA O TICHOM SPOLOČENSTVE A ZMLUVA O BUDÚCEJ ZMLUVE O KÚPE AKCIÍ
    </h2>
    <p class="text-center">
        uzatvorená podľa § 673 a nasl. a § 289 a nasl. zákona č. 513/1991 Zb., Obchodný zákonník v platnom znení
        (ďalej aj ako „Zmluva“)
    </p>


    {{-- Aby v SK language sa generoval iba Sk text--}}
    @if(App::getLocale() != 'sk')
    <h2 class="text-center lang">@lang('member/contracts/sp.title')</h2>
    <p class="text-center lang">
        @lang('member/contracts/sp.title2')
    </p>
    @endif
    {{-- End of Title header --}}



    <table class="details">
        <tr>
            <th>@lang('member/contracts/sp.en', [], 'sk')</th>

            <th>@lang('member/contracts/sp.sp', [], 'sk')</th>
        </tr>

        <tr>
            <td>
                <strong>Šírava Development s.r.o.</strong><br>
                @lang('form.companyID', [], 'sk'): 52 112 985<br>
                Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                @lang('member/contracts/sp.representedBy', ['director' => config('cee.director')], 'sk')<br><br>
                E-mail: info@cee-realestate.com<br>

                a<br>
                <strong>Budúci prevodca akcií:</strong><br>
                <span>Obchodné meno: </span><strong>CEE Real Estate Group s.r.o.</strong><br>
                <span>Sídlo: </span><strong>Gorkého 5, Bratislava - mestská časť Staré Mesto 811 01,</strong><br>
                <span>IČO:</span><strong>51 773 074</strong><br>
                <span>Zápis: Obchodný register Okresného súdu Bratislava I. odd. Sro, Vl.č.: 132947/B'</span><br>
                <span>Konajúca: </span> <strong>Lucia Ciriaková, konateľ</strong><br>
                <span>(ďalej len „CEE Real Estate Group s.r.o.”)</span><br><br>
                <span>spolu ďalej aj ako „Zmluvné strany“</span><br>
            </td>

            <td>
                @lang('form.fullName', [], 'sk'): <strong>{{ $objOrder->name }}</strong> <strong>{{ $objOrder->surname }}</strong><br>
                @lang('form.govID', [], 'sk'): <strong>{{ $objOrder->government_id }}</strong><br>
                @lang('public/contact.address', [], 'sk'): <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong><br>
                @lang('form.region', [], 'sk'): <strong>{{ $objOrder->region }}</strong><br>
                @lang('form.country', [], 'sk'): <strong>{{ $objOrder->country }}</strong><br>
                @lang('form.nationality', [], 'sk'): <strong>{{ $objOrder->nationality }}</strong><br><br>
                E-mail: <strong>{{ $objOrder->email }}</strong>

                @if($objOrder->company)
                    <br><br><strong>@lang('member/invest/step1.company', [], 'sk')</strong><br>
                    @lang('form.company', [], 'sk'): <strong>{{ $objOrder->company->name }}</strong><br>
                    @lang('form.companyID', [], 'sk'): <strong>{{ $objOrder->company->id_number }}</strong><br>
                    @lang('public/contact.address', [], 'sk'): <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
                    @lang('form.region', [], 'sk'): <strong>{{ $objOrder->company->region }}</strong><br>
                    @lang('form.country', [], 'sk'): <strong>{{ $objOrder->company->country }}</strong>
                @endif

                @if($objOrder->joint)
                    <br><br><strong>@lang('member/invest/step1.joint', [], 'sk')</strong><br>
                    @lang('form.fullName', [], 'sk'): <strong>{{ $objOrder->joint->name }}</strong><br>
                    @lang('form.govID', [], 'sk'): <strong>{{ $objOrder->joint->government_id }}</strong>
                @endif
            </td>
        </tr>


        {{--Dalej ako podnikateľ--}}
        <tr>
            <th>ďalej ako "Podnikateľ"</th>
            <th>ďalej ako "Tichý spoločník"</th>
        </tr>
    </table>

    {{--Zlom prvej strany --}}
    @if(App::getLocale() != 'sk')
    <pagebreak />
    @endif

    {{--   Tabuľka č.2 --}}
    @if(App::getLocale() != 'sk')
    <table class="details lang">
            <tr>
                <th>@lang('member/contracts/sp.en')</th>

                <th>@lang('member/contracts/sp.sp')</th>
            </tr>

            <tr>
                <td>
                    <strong>Šírava Development s.r.o.</strong><br>
                    @lang('form.companyID'): 52 112 985<br>
                    Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                    @lang('member/contracts/sp.representedBy', ['director' => config('cee.director')])<br><br>
                    E-mail: info@cee-realestate.com<br>

                    {{-- Doplnenie prevodu na firmu --}}
                    and<br>
                    <strong>Future trader of shares:</strong><br>
                    <span>On behalf of full power: </span><strong>CEE Real Estate Group s.r.o.</strong><br>
                    <span>Sídlo: </span><strong>Gorkého 5, Bratislava - mestská časť Staré Mesto 811 01,</strong><br>
                    <span>Company ID number: </span><strong>51 773 074</strong><br>
                    <span>Commercial Register of the District Court Bratislava I. odd. Sro, Vl.č.: 132947/B</span><br>
                    <br>
                    <span>Managing Director </span> <strong>Lucia Ciriaková, Managing Director</strong><br>
                    <span>(ďalej len „CEE Real Estate Group s.r.o.”)</span><br><br>
                    <span>spolu ďalej aj ako „Zmluvné strany“</span><br>

                </td>

                <td>
                    @lang('form.fullName'): <strong>{{ $objOrder->name }}</strong> <strong>{{ $objOrder->surname }}</strong><br>
                    @lang('form.govID'): <strong>{{ $objOrder->government_id }}</strong><br>
                    @lang('public/contact.address'): <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong><br>
                    @lang('form.region'): <strong>{{ $objOrder->region }}</strong><br>
                    @lang('form.country'): <strong>{{ $objOrder->country }}</strong><br>
                    @lang('form.nationality'): <strong>{{ $objOrder->nationality }}</strong><br><br>
                    E-mail: <strong>{{ $objOrder->email }}</strong>



                    @if($objOrder->company)
                        <br><br><strong>@lang('member/invest/step1.company')</strong><br>
                        @lang('form.company'): <strong>{{ $objOrder->company->name }}</strong><br>
                        @lang('form.companyID'): <strong>{{ $objOrder->company->id_number }}</strong><br>
                        @lang('public/contact.address'): <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
                        @lang('form.region'): <strong>{{ $objOrder->company->region }}</strong><br>
                        @lang('form.country'): <strong>{{ $objOrder->company->country }}</strong>
                    @endif

                    @if($objOrder->joint)
                        <br><br><strong>@lang('member/invest/step1.joint')</strong><br>
                        @lang('form.fullName'): <strong>{{ $objOrder->joint->name }}</strong><br>
                        @lang('form.govID'): <strong>{{ $objOrder->joint->government_id }}</strong>
                    @endif
                </td>
            </tr>

            <tr>
                <th>hereafter as "Entrepreneur"</th>

                <th>hereafter as "Silent partner"</th>
            </tr>
        </table>
    @endif

    <br>


    {{--Základné parametre Investície do realitného projektu:--}}
    <table class="details">
            <tr>
                <th colspan="2">
                    Základné parametre Investície do realitného projektu:
                    {{--@lang('member/contracts/tdo.params', [], 'sk')--}}
                </th>
            </tr>

            <tr>
                <td>
                    Názov
                    {{--@lang('member/contracts/tdo.name', [], 'sk')--}}
                </td>

                <td>
                    <strong>{{ $objOrder->sp->project->name }}</strong>
                </td>
            </tr>

            <tr>
                <td>
                    Lokácia
                    {{--@lang('member/contracts/tdo.location', [], 'sk')--}}
                </td>

                <td>
                    <strong>{{ $objOrder->sp->project->location }}</strong>
                </td>
            </tr>

            <tr>
                <td>
                    Rezervovaný budúci podiel na základnom imaní spoločnosti Šírava Development, s.r.o.
                    {{--@lang('member/contracts/tdo.2', [], 'sk')--}}
                </td>

                <td>
                    <strong>{{ number_format($objOrder->sp->shares, 2, ',', ' ') }}%</strong><br>
                    (ďalej len „Obchodný podiel“)
{{--                    @lang('member/contracts/tdo.4', [], 'sk')--}}
                </td>
            </tr>

            <tr>
                <td>
                    Záväzok vkladu investície do kapitálových fondov spoločnosti Šírava Development, s.r.o.
                    {{--@lang('member/contracts/tdo.3', [], 'sk')--}}
                </td>

                <td>
                    &euro; <strong>{{ number_format($objOrder->sp->investment, 0, ',', ' ') }}</strong><br>
                    (ďalej len „Investícia“)
{{--                    @lang('member/contracts/tdo.5', [], 'sk')--}}
                </td>
            </tr>
        </table>

    <br>
    @if(App::getLocale() != 'sk')
    <table class="details lang">
        <tr>
            <th colspan="2">
                @lang('member/contracts/tdo.params')
            </th>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.name')</td>

            <td>
                <strong>{{ $objOrder->sp->project->name }}</strong>
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.location')</td>

            <td>
                <strong>{{ $objOrder->sp->project->location }}</strong>
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.2')</td>

            <td>
                <strong>{{ number_format($objOrder->sp->shares, 2, ',', ' ') }}%</strong><br>
                @lang('member/contracts/tdo.4')
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.3')</td>

            <td>
                &euro; <strong>{{ number_format($objOrder->sp->investment, 0, ',', ' ') }}</strong><br>
                @lang('member/contracts/tdo.5')
            </td>
        </tr>
    </table>
    @endif
    {{-- END Základné parametre Investície do realitného projektu:--}}
    <br>

    {{--Preambula 1 --}}
    <h3 class="text-center">Článok I - Preambula</h3>
    <p>Podnikateľ spolu so svojou materskou spoločnosťou CEE Real Estate Group s.r.o., pripravujú realitný projekt s označením Šírava Park v oblasti Zemplínska Šírava v katastrálnom území obce Klokočov z uvedeného dôvodu sa Zmluvné strany dohodli, že do momentu nadobudnutia vlastníckeho práva k akciám v spoločnosti Podnikateľa za podmienok deﬁnovaných v čl. VII tejto Zmluvy má Tichý spoločník záujem podieľať sa na podnikaní Podnikateľa v súvislosti s realitným projektom s označením Šírava Park prostredníctvom investície ako peňažnej čiastky vo forme vkladu tichého spoločníka podľa § 673 a nasl. zákona č. 513/1991 Zb., Obchodný zákonník v tejto Zmluve.</p>


    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.article1')</h3>

        <p class="lang">@lang('member/contracts/sp.article11')</p>
    @endif




    <h3 class="text-center">Článok II Predmet zmluvy a vklad</h3>

    <ol>
        <li>Predmetom Zmluvy je na strane jednej záväzok Tichého spoločníka poskytnúť Podnikateľovi vklad a podieľať sa spolu s ním na jeho podnikaní a na strane druhej záväzok Podnikateľa spočívajúci vo vyplácaní časti zisku vyplývajúceho z podielu Tichého spoločníka na výsledku podnikania.</li>
        <li>@lang('member/contracts/sp.2_2', ['amount' =>  number_format($objOrder->sp->investment, 0, ',', ' ') ], 'sk')</li>
        <li>Tichý spoločník sa zaväzuje poskytnúť Podnikateľovi Vklad podľa bodu 2 tohto článku Zmluvy tým, že peňažné prostriedky zodpovedajúce výške vkladu poukázal odo dňa podpisu tejto Zmluvy na bankový účet CEE Real Estate Group s.r.o. IBAN: SK91 7500 0000 0040 2612 5125, ktorý je platobným miestom stanoveným Podnikateľom touto Zmluvou za účelom odovzdania Vkladu Podnikateľovi.</li>
        <li>CEE Real Estate Group s.r.o sa zaväzuje odovzdať Vklad Podnikateľovi najneskôr dňa 31.12. 2022 v prípade, ak dovtedy nedôjde k prevodu akcií spoločnosti Podnikateľa, alebo spoločnosti Právneho nástupcu podnikateľa na Tichého spoločníka. Predmetom tejto Zmluvy je súčasne zväzok uzatvoriť zmluvu o budúcej zmluve o kúpe akcií. Podnikateľa za podmienok stanovených v čl. VII tejto Zmluvy.</li>
        <li>@lang('member/contracts/sp.3', ['amount' => $objOrder->sp->investment], 'sk')</li>
        <li>Podnikateľ touto Zmluvou vyhlasuje že Vklad Vklad od Tichého spoločníka prijíma za podmienok definovaných v tejto Zmluve a zaväzuje sa zaplatiť Tichému spoločníkovi podiel z čistého zisku vo výške podľa čl. III bod 1.</li>
        <li>Tichý spoločník má ohľadne Vkladu právne postavenie, aké má veriteľ ohľadne svojej pohľadávky, nie je však oprávnený požadovať vrátenie Vkladu pred zánikom tejto Zmluvy.</li>
        <li>Predmetom tejto Zmluvy je súčasne zväzok uzatvoriť zmluvu o budúcej zmluve o kúpe akcií podnikateľa za podmienok stanovených v čl. VII tejto Zmluvy.</li>
    </ol>



    {{--Preambula 2 --}}
    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.article2')</h3>

        <ol class="lang">
            <li> @lang('member/contracts/sp.article21')</li>
            <li> @lang('member/contracts/sp.article22', ['amount' => number_format($objOrder->sp->investment, 0, ',', ' ')])</li>
            <li> @lang('member/contracts/sp.article23')</li>
            <li> @lang('member/contracts/sp.article24')</li>
            <li> @lang('member/contracts/sp.article25')</li>
            <li> @lang('member/contracts/sp.article26')</li>
            <li> @lang('member/contracts/sp.article27')</li>
        </ol>
        @endif
    {{--End of Preambula 2 --}}


    {{--Preambula 3 --}}
    <h3 class="text-center">Článok III - Podiel Tichého spoločníka na výsledku podnikania Podnikateľa</h3>

    <ol>
        <li>@lang('member/contracts/sp.7', ['shares' => number_format($objOrder->sp->shares, 2, ',', ' ')], 'sk')</li>

        <li>Pre určenie podielu Tichého spoločníka na výsledku podnikania je rozhodná ročná účtovná závierka Podnikateľa.</li>

        <li>Spoločník sa začína podieľať na podnikaní Podnikateľa dňom poskytnutia Vkladu.</li>

        <li>Tichému spoločníkovi vzniká nárok na podiel zo zisku vo výške stanovenej v bode 1 tohto článku do 30 dní odo dňa schválenia účtovnej závierky v spoločnosti Podnikateľa v súlade so zakladateľskou listinou Podnikateľa a zákonom.</li>

        <li>V prípade, že Zmluva zanikne v priebehu kalendárneho roka, Tichému  spoločníkovi patrí podiel na zisku zodpovedajúci obdobiu roka dokedy Zmluva platila.</li>

        <li>Podiel na zisku sa vypláca v eurách na bankový účet Tichého spoločníka.</li>

        <li>O podiel na strate sa znižuje vklad Tichého spoločníka. O podiel na zisku v ďalších rokoch sa znížený vklad zvyšuje a nárok na podiel na zisku vzniká Tichému spoločníkovi po dosiahnutí pôvodnej výšky jeho vkladu.</li>

        <li>Tichý spoločník nie je povinný pri podiele na strate z podnikania svoj vklad dopĺňať a na strate sa zúčastňuje len do výšky svojho vkladu.</li>
    </ol>


    @if(App::getLocale() != 'sk')

        <h3 class="text-center lang">@lang('member/contracts/sp.article3')</h3>

        <ol class="lang">
            <li> @lang('member/contracts/sp.article31', ['shares' => number_format($objOrder->sp->shares, 2, ',', ' ')])</li>
            <li> @lang('member/contracts/sp.article32')</li>
            <li> @lang('member/contracts/sp.article33')</li>
            <li> @lang('member/contracts/sp.article34')</li>
            <li> @lang('member/contracts/sp.article35')</li>
            <li> @lang('member/contracts/sp.article36')</li>
            <li> @lang('member/contracts/sp.article37')</li>
            <li> @lang('member/contracts/sp.article38')</li>
        </ol>
    @endif


    <h3 class="text-center">Článok IV - Právo kontroly</h3>

    <ol>
        <li>Tichý spoločník je oprávnený nahliadať do všetkých obchodných dokladov a účtovných záznamov týkajúcich sa podnikania, na ktorom sa podieľa svojím vkladom podľa Zmluvy.</li>

        <li>Podnikateľ je povinný poskytnúť Tichému spoločníkovi na požiadanie informácie o podnikateľskom zámere Podnikateľa na budúce obdobie a o predpokladanom vývoji stavu majetku a financií týkajúcich sa podnikania Podnikateľa, na ktorom sa Tichý spoločník podieľa svojím Vkladom podľa tejto Zmluvy.</li>

        <li> Podnikateľ je povinný na požiadanie poskytnúť Tichému spoločníkovi kópiu účtovnej závierky, ak zákon ukladá Podnikateľovi povinnosť mať účtovnú závierku overenú audítorom, a výročnú správu, tak je povinný Tichému spoločníkovi predložiť aj účtovnú závierku overenú audítorom, a výročnú správu Podnikateľa.</li>

        <li>Podnikateľ je povinný na žiadosť Tichého spoločníka zaslať požadované informácie alebo kópie listín Tichému spoločníkovi na ním uvedenú adresu na vlastné náklady.</li>
    </ol>

    {{--Preambula 4 --}}
    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang"> @lang('member/contracts/sp.article4')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/sp.article41')</li>
            <li>@lang('member/contracts/sp.article42')</li>
            <li>@lang('member/contracts/sp.article43')</li>
            <li>@lang('member/contracts/sp.article44')</li>
        </ol>
    @endif

    {{--Preambula 5 --}}
    <h3 class="text-center">Článok V - Povinnosť mlčanlivosti</h3>
    <ol>
        <li>Tichý spoločník sa zaväzuje zachovávať mlčanlivosť o všetkých skutočnostiach tvoriacich obsah podnikateľských aktivít, ktorých je Podnikateľ zúčastnený a na ktorých sa Tichý spoločník podieľa svojím vkladom.</li>
        <li>V prípade, že Tichý spoločník poruší povinnosti, ktoré mu vyplývajú z bodu 1 tohto článku zaväzuje sa Podnikateľovi zaplatiť zmluvnú pokutu vo výške 5% Vkladu.</li>
    </ol>


    @if(App::getLocale() != 'sk')
    <h3 class="text-center lang">@lang('member/contracts/sp.article5')</h3>

    <ol class="lang">
        <li>@lang('member/contracts/sp.article51')</li>
        <li>@lang('member/contracts/sp.article52')</li>
    </ol>

    @endif


    {{--Preambula 6 --}}
    <h3 class="text-center">Článok VI - Ukončenie Zmluvy</h3>

    <ol>
        <li>Zmluva sa uzatvára na dobu neurčitú.</li>

        <li>Účasť tichého spoločníka na podnikaní a Podnikateľa a súčasne táto Zmluva zaniká:

            <ol type="a">
                <li>uplatnením opcie podľa čl. VII tejto Zmluvy.</li>
                <li>výpoveďou, ak nebola zmluva uzavretá na dobu určitú,</li>
                <li>ak dosiahne podiel Tichého spoločníka na strate výšku jeho vkladu,</li>
                <li>@lang('member/contracts/sp.26', [], 'sk')</li>
                <li>@lang('member/contracts/sp.27', [], 'sk')</li>
            </ol>
        </li>

        <li>Ktorákoľvek zo Zmluvných strán môže Zmluvu vypovedať s trojmesačnou výpovednou lehotou, pričom výpovedná lehota začína plynúť mesiac nasledujúci po doručení výpovede. Tichý spoloční nie je oprávnený Zmluvu vypovedať skôr ako dňa 31.12. 2022.</li>
        <li>4.	Do 30 dní po zániku zmluvy je Podnikateľ povinný vrátiť Tichému spoločníkovi vklad zvýšený alebo znížený o jeho podiel na výsledku podnikania. Podnikateľ nie je povinný vrátiť Tichému spoločníkovi Vklad podľa predchádzajúcej vety v prípade ak došlo k zániku tejto Zmluvy v súlade s bodom 2 pís. a) tohto článku (opcia na kúpu akcií Podnikateľa).</li>
    </ol>


    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.article6')</h3>

        <ol class="lang">
            <li> @lang('member/contracts/sp.article61')</li>

            <li> @lang('member/contracts/sp.article62')

                <ol type="a">
                    <li>@lang('member/contracts/sp.article63')</li>
                    <li>@lang('member/contracts/sp.article64')</li>
                    <li>@lang('member/contracts/sp.article65')</li>
                    <li>@lang('member/contracts/sp.article66')</li>
                    <li>@lang('member/contracts/sp.article67')</li>
                </ol>
            </li>

            <li>@lang('member/contracts/sp.article68')</li>
            <li>@lang('member/contracts/sp.article69')</li>
        </ol>
        @endif


    {{--Preambula 7 --}}

    <h3 class="text-center">Článok VII - Opcia na kúpu akcií spoločnosti Podnikateľa
        alebo spoločnosti Právneho nástupcu podnikateľa</h3>
    <span class="text-center">(Zmluva o budúcej zmluve o kúpe akcií v spoločnosti Podnikateľa
    alebo v spoločnosti Právneho nástupcu podnikateľa)</span>


    <ol>
        <li>@lang('member/contracts/sp.a81', ['shares' => number_format($objOrder->sp->shares, 2, ',', ' ')], 'sk')</li>
        <li>Pre vylúčenie akýchkoľvek pochybností sa ustanovenie čl. VII bod 1 Zmluvy považuje za zmluvu o budúcej zmluve okúpe akcií spoločnosti Podnikateľa, ktorú uzatvorila spoločnosť CEE Real Estate Group s.r.o. s Tichým spoločníkom ako budúcim nadobúdateľom akcií spoločnosti Podnikateľa alebo zmluvu o budúcej zmluve o kúpe akcií spoločnosti. Právneho nástupcu podnikateľa, ktorú uzatvorila spoločnosť CEE Real Estate Group s.r.o. s Tichým spoločníkom ako budúcim nadobúdateľom akcií spoločnosti Právneho nástupcu podnikateľa.</li>
        <li>V prípade, ak zo so strany Tichého spoločníka došlo k uplatneniu opcie na kúpu akcií v spoločnosti Podnikateľa, alebo v spoločnosti Právneho nástupcu podnikateľa podľa tohto článku Zmluvy, Kúpna cena za prevod akcií v spoločnosti. Podnikateľa, alebo Kúpna cena za prevod akcií za prevod akcií v spoločnosti Právneho nástupcu podnikateľa bude prevodcovi týchto akcií - spoločnosti CEE Real Estate Group s.r.o. uhradená z prostriedkov Vkladu, ktorý Tichý spoločník poukázal CEE Real Estate Group s.r.o. v súlade s čl. III bod 3 tejto Zmluvy. Pre vylúčenie pochybností CEE Real Estate Group s.r.o. má právo ponechať. si peňažné prostriedky zodpovedajúce výške Vkladu za účelom úhrady kúpnej ceny s čím Tichý spoločník súhlasí.</li>
    </ol>



    @if(App::getLocale() != 'sk')
    <h3 class="text-center lang">@lang('member/contracts/sp.article7')</h3>
    <span class="text-center lang">@lang('member/contracts/sp.article71')</span>

    <ol class="lang">
        <li>@lang('member/contracts/sp.article72', ['shares' => number_format($objOrder->sp->shares, 2, ',', ' ')])</li>
        <li>@lang('member/contracts/sp.article73')</li>
        <li>@lang('member/contracts/sp.article74')</li>
    </ol>
    @endif

    {{--Preambula 8 --}}
        <h3 class="text-center">Článok VIII - Záverečné ustanovenia</h3>

        <ol>
            <li>CEE Real Estate Group s.r.o. je oprávnený nakladať s peňažnými prostriedkami predstavujúcimi Vklad, ktorý Tichý spoločník vložil v súlade s čl. III bod 3 podľa vlastného uváženia do momentu kým ich v súlade s touto Zmluvou nemá použiť na účel stanovený v tejto Zmluve.</li>
            <li>Vzťahy Zmluvných strán, ktoré Zmluva neupravuje, sa riadia príslušnými ustanoveniami Obchodného zákonníka a ostatných platných právnych predpisov.</li>
            <li>Zmluva nadobúda platnosť a účinnosť dňom jej podpísania obomi Zmluvnými stranami.</li>
            <li>Akékoľvek zmeny Zmluvy je možné vykonať výlučne na základe písomnej dohody Zmluvných strán formou písomných dodatkov podpísaných oboma Zmluvnými stranami.</li>
            <li>Zmluva je vyhotovená v 2 rovnopisoch, z ktorých každý má platnosť originálu. Každá zo zmluvných strán dostane jeden rovnopis.</li>
            <li>Zmluvné strany vyhlasujú, že si túto Zmluvu prečítali, jej obsahu plne porozumeli, táto bola spísaná na základe ich slobodnej vôle, že jej text je zrozumiteľným vyjadrením ich slobodne a vážne prejavenej vôle, že Zmluvu neuzatvárajú v tiesni ani za jednostranne výhodných podmienok a na znak súhlasu pripájajú svoje podpisy.</li>
        </ol>


    @if(App::getLocale() != 'sk')
    <h3 class="text-center">@lang('member/contracts/sp.article8')</h3>
    <ol class="lang">
        <li>@lang('member/contracts/sp.article81')</li>
        <li>@lang('member/contracts/sp.article82')</li>
        <li>@lang('member/contracts/sp.article83')</li>
        <li>@lang('member/contracts/sp.article84')</li>
        <li>@lang('member/contracts/sp.article85')</li>
        <li>@lang('member/contracts/sp.article86')</li>
    </ol>
    @endif


    <table class="signatures">
        <tr>
            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo.debtor', [], 'sk'):<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
                        @lang('member/contracts/tdo.debtor'):
            </span>
                @endif
            </td>

            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo.creditor', [], 'sk'):<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
                        @lang('member/contracts/tdo.creditor'):
            </span>
                @endif
            </td>
        </tr>

        <tr>
            <td class="signature">
                DSS2........................................<br>
                {{ config('cee.director') }}<br>
                Managing Director<br>
                CEE Real Estate Group s.r.o.<br>
                Za Šírava developmet, s.r.o.<br>
                (v zastúpení CEE Real Estate Group, s.r.o.<br>
                na základe splnomocnenia)
            </td>

            <td class="signature">
                DSS1........................................<br>
                {{ $objOrder->name }} {{ $objOrder->surname }}
                Silent Partner<br>
                @if(isset($objOrder->company))
                    <br>{{ $objOrder->company->name }}
                @endif
            </td>
        </tr>
    </table>
@endsection