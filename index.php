<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
$headerLinks = ['Introduzione', 'Norme sulla privacy', 'Termini di servizio', 'Tecnologie', 'Domande frequenti'];

$faq = [
    [
        'question' => "<h3>Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h3>",

        'answer' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.

        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.

        Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.

        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.

        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
    ],
    [
        'question' => "<h3>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h3>",
        'answer' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

        Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.

        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.

        Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
    ],
    [
        'question' => "<h3>Perché il mio account è associato a un paese?</h3>",
        'answer' => "l tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:

        La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
        Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.
        Google LLC, con sede negli Stati Uniti, per il resto del mondo.
        La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.
        Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.

        Stabilire il paese associato al tuo account
        Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.

        I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.

        Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato."
    ],
    [
        'question' => "<h3>Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?</h3>",
        'answer' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
    ],
    [
        'question' => "<h3>Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?</h3>",
        'answer' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
    ],
];

$footerLinks = ['Google', 'Tutto su Google', 'Privacy', 'Termini'];

$languages_list = [
    'af' => 'Afrikaans',
    'sq' => 'Albanian - shqip',
    'am' => 'Amharic - አማርኛ',
    'ar' => 'Arabic - العربية',
    'an' => 'Aragonese - aragonés',
    'hy' => 'Armenian - հայերեն',
    'ast' => 'Asturian - asturianu',
    'az' => 'Azerbaijani - azərbaycan dili',
    'eu' => 'Basque - euskara',
    'be' => 'Belarusian - беларуская',
    'bn' => 'Bengali - বাংলা',
    'bs' => 'Bosnian - bosanski',
    'br' => 'Breton - brezhoneg',
    'bg' => 'Bulgarian - български',
    'ca' => 'Catalan - català',
    'ckb' => 'Central Kurdish - کوردی (دەستنوسی عەرەبی)',
    'zh' => 'Chinese - 中文',
    'zh-HK' => 'Chinese (Hong Kong) - 中文（香港）',
    'zh-CN' => 'Chinese (Simplified) - 中文（简体）',
    'zh-TW' => 'Chinese (Traditional) - 中文（繁體）',
    'co' => 'Corsican',
    'hr' => 'Croatian - hrvatski',
    'cs' => 'Czech - čeština',
    'da' => 'Danish - dansk',
    'nl' => 'Dutch - Nederlands',
    'en' => 'English',
    'en-AU' => 'English (Australia)',
    'en-CA' => 'English (Canada)',
    'en-IN' => 'English (India)',
    'en-NZ' => 'English (New Zealand)',
    'en-ZA' => 'English (South Africa)',
    'en-GB' => 'English (United Kingdom)',
    'en-US' => 'English (United States)',
    'eo' => 'Esperanto - esperanto',
    'et' => 'Estonian - eesti',
    'fo' => 'Faroese - føroyskt',
    'fil' => 'Filipino',
    'fi' => 'Finnish - suomi',
    'fr' => 'French - français',
    'fr-CA' => 'French (Canada) - français (Canada)',
    'fr-FR' => 'French (France) - français (France)',
    'fr-CH' => 'French (Switzerland) - français (Suisse)',
    'gl' => 'Galician - galego',
    'ka' => 'Georgian - ქართული',
    'de' => 'German - Deutsch',
    'de-AT' => 'German (Austria) - Deutsch (Österreich)',
    'de-DE' => 'German (Germany) - Deutsch (Deutschland)',
    'de-LI' => 'German (Liechtenstein) - Deutsch (Liechtenstein)',
    'de-CH' => 'German (Switzerland) - Deutsch (Schweiz)',
    'el' => 'Greek - Ελληνικά',
    'gn' => 'Guarani',
    'gu' => 'Gujarati - ગુજરાતી',
    'ha' => 'Hausa',
    'haw' => 'Hawaiian - ʻŌlelo Hawaiʻi',
    'he' => 'Hebrew - עברית',
    'hi' => 'Hindi - हिन्दी',
    'hu' => 'Hungarian - magyar',
    'is' => 'Icelandic - íslenska',
    'id' => 'Indonesian - Indonesia',
    'ia' => 'Interlingua',
    'ga' => 'Irish - Gaeilge',
    'it' => 'Italian - italiano',
    'it-IT' => 'Italian (Italy) - italiano (Italia)',
    'it-CH' => 'Italian (Switzerland) - italiano (Svizzera)',
    'ja' => 'Japanese - 日本語',
    'kn' => 'Kannada - ಕನ್ನಡ',
    'kk' => 'Kazakh - қазақ тілі',
    'km' => 'Khmer - ខ្មែរ',
    'ko' => 'Korean - 한국어',
    'ku' => 'Kurdish - Kurdî',
    'ky' => 'Kyrgyz - кыргызча',
    'lo' => 'Lao - ລາວ',
    'la' => 'Latin',
    'lv' => 'Latvian - latviešu',
    'ln' => 'Lingala - lingála',
    'lt' => 'Lithuanian - lietuvių',
    'mk' => 'Macedonian - македонски',
    'ms' => 'Malay - Bahasa Melayu',
    'ml' => 'Malayalam - മലയാളം',
    'mt' => 'Maltese - Malti',
    'mr' => 'Marathi - मराठी',
    'mn' => 'Mongolian - монгол',
    'ne' => 'Nepali - नेपाली',
    'no' => 'Norwegian - norsk',
    'nb' => 'Norwegian Bokmål - norsk bokmål',
    'nn' => 'Norwegian Nynorsk - nynorsk',
    'oc' => 'Occitan',
    'or' => 'Oriya - ଓଡ଼ିଆ',
    'om' => 'Oromo - Oromoo',
    'ps' => 'Pashto - پښتو',
    'fa' => 'Persian - فارسی',
    'pl' => 'Polish - polski',
    'pt' => 'Portuguese - português',
    'pt-BR' => 'Portuguese (Brazil) - português (Brasil)',
    'pt-PT' => 'Portuguese (Portugal) - português (Portugal)',
    'pa' => 'Punjabi - ਪੰਜਾਬੀ',
    'qu' => 'Quechua',
    'ro' => 'Romanian - română',
    'mo' => 'Romanian (Moldova) - română (Moldova)',
    'rm' => 'Romansh - rumantsch',
    'ru' => 'Russian - русский',
    'gd' => 'Scottish Gaelic',
    'sr' => 'Serbian - српски',
    'sh' => 'Serbo-Croatian - Srpskohrvatski',
    'sn' => 'Shona - chiShona',
    'sd' => 'Sindhi',
    'si' => 'Sinhala - සිංහල',
    'sk' => 'Slovak - slovenčina',
    'sl' => 'Slovenian - slovenščina',
    'so' => 'Somali - Soomaali',
    'st' => 'Southern Sotho',
    'es' => 'Spanish - español',
    'es-AR' => 'Spanish (Argentina) - español (Argentina)',
    'es-419' => 'Spanish (Latin America) - español (Latinoamérica)',
    'es-MX' => 'Spanish (Mexico) - español (México)',
    'es-ES' => 'Spanish (Spain) - español (España)',
    'es-US' => 'Spanish (United States) - español (Estados Unidos)',
    'su' => 'Sundanese',
    'sw' => 'Swahili - Kiswahili',
    'sv' => 'Swedish - svenska',
    'tg' => 'Tajik - тоҷикӣ',
    'ta' => 'Tamil - தமிழ்',
    'tt' => 'Tatar',
    'te' => 'Telugu - తెలుగు',
    'th' => 'Thai - ไทย',
    'ti' => 'Tigrinya - ትግርኛ',
    'to' => 'Tongan - lea fakatonga',
    'tr' => 'Turkish - Türkçe',
    'tk' => 'Turkmen',
    'tw' => 'Twi',
    'uk' => 'Ukrainian - українська',
    'ur' => 'Urdu - اردو',
    'ug' => 'Uyghur',
    'uz' => 'Uzbek - o‘zbek',
    'vi' => 'Vietnamese - Tiếng Việt',
    'wa' => 'Walloon - wa',
    'cy' => 'Welsh - Cymraeg',
    'fy' => 'Western Frisian',
    'xh' => 'Xhosa',
    'yi' => 'Yiddish',
    'yo' => 'Yoruba - Èdè Yorùbá',
    'zu' => 'Zulu - isiZulu'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>php-google-faq</title>
</head>

<body>
    <header>
        <div id="logo" class="d-flex align-items-center gap-1">
            <img class="img-fluid" src="img/download.png" alt="">
            <h3>Privacy e Termini</h3>
        </div>
        <nav>
            <ul class="d-flex gap-5">
                <?php foreach ($headerLinks as $link) {
                    echo "<li> $link </li>";
                } ?>
            </ul>
        </nav>
    </header>
    <main class="container">
        <section>
            <?php foreach ($faq as $value) {
                echo "{$value['question']} <br>";
                echo "{$value['answer']} ";
            } ?>
        </section>
    </main>
    <footer>
        <nav class="container d-flex justify-content-between align-items-center">
            <ul class="d-flex gap-2">
                <?php foreach ($footerLinks as $link) {
                    echo "<li> $link </li>";
                } ?>
            </ul>
            <select class="form-select">
                <option selected>Italiano</option>
                <?php foreach ($languages_list as $language) {
                    echo "<option>$language</option>";
                } ?>
            </select>
        </nav>
    </footer>
</body>

</html>