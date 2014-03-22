<?php
/**
 * Internationalization file for the AJAX Poll extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Dariusz Siedlecki
 * @author Thomas Gries
 */
$messages['en'] = array(
	'ajaxpoll-desc' => 'Allows AJAX-based polls with <tt>&lt;poll&gt;</tt> tag',
	'ajaxpoll-tracking-category' => 'Pages with a poll',
	'ajaxpoll-vote-update' => 'Your vote has been updated.',
	'ajaxpoll-vote-add' => 'Your vote has been added.',
	'ajaxpoll-vote-error' => 'There was a problem with processing your vote, please try again.',
	'ajaxpoll-percent-votes' => '$1% of all votes',
	'ajaxpoll-your-vote' => 'You voted for "$1" on $2. You can change your vote by clicking a different answer below.',
	'ajaxpoll-no-vote' => 'Please vote below.',
	'ajaxpoll-no-vote-results-after-voting' => 'Please vote below. Results will be shown when you have voted.',
	'ajaxpoll-info' => 'There {{PLURAL:$1|was one vote|were $1 votes}} since the poll was created on $2.',
	'ajaxpoll-submitting' => 'Please wait, submitting your vote.',
	'ajaxpoll-vote-permission' => 'You are not entitled to vote.',
	'ajaxpoll-view-results-permission' => 'You are not entitled to view results of this poll.',
	'ajaxpoll-view-results-before-vote-permission' => 'You are not entitled to view results of this poll before you have voted.',
	'ajaxpoll-revoke-vote' => 'I want to revoke my vote',
	'ajaxpoll-vote-revoked' => 'Your vote has been revoked.',
	'ajaxpoll-error-csrf-wrong-token' => 'A wrong token was received, and your vote is ignored.',

	# Rights
	'right-ajaxpoll-vote' => 'Can vote in AJAX-based polls',
	'right-ajaxpoll-view-results' => 'Can view results in AJAX-based polls',
	'right-ajaxpoll-view-results-before-vote' => 'Can view results in AJAX-based polls before having voted',

	# Associated actions - in the sentence "You do not have permission to X"
	'action-ajaxpoll-vote' => 'vote in AJAX-based polls',
	'action-ajaxpoll-view-results' => 'view results in AJAX-based polls',
	'action-ajaxpoll-view-results-before-vote' => 'view results in AJAX-based polls before having voted',
);

/** Message documentation (Message documentation)
 * @author Okras
 * @author Shirayuki
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'ajaxpoll-desc' => '{{desc|name=AJAX Poll|url=http://www.mediawiki.org/wiki/Extension:AJAX_Poll}}',
	'ajaxpoll-tracking-category' => 'The name of a category for all pages which use the <code><nowiki><poll></nowiki></code> parser extension tag.

The category is automatically added unless the feature is disabled.',
	'ajaxpoll-vote-update' => 'System response that the vote was successfully updated.

If error, the following message is used:
* {{msg-mw|Ajaxpoll-vote-error}}',
	'ajaxpoll-vote-add' => 'System response that the vote was successfully added.

If error, the following message is used:
* {{msg-mw|Ajaxpoll-vote-error}}',
	'ajaxpoll-vote-error' => 'Used as error message.

If successful, the following message are used:
* {{msg-mw|Ajaxpoll-vote-update}}
* {{msg-mw|Ajaxpoll-vote-add}}
* {{msg-mw|Ajaxpoll-vote-revoked}}',
	'ajaxpoll-percent-votes' => 'Parameters:
* $1 - the percentage number of the votes',
	'ajaxpoll-your-vote' => 'Parameters:
* $1 - the answer name
* $2 - the time/date when the answer was posted',
	'ajaxpoll-no-vote' => 'Used if there are no votes.

See also:
* {{msg-mw|Ajaxpoll-revoke-vote}}',
	'ajaxpoll-no-vote-results-after-voting' => 'Invitation to vote and indication that results will be shown after voting.',
	'ajaxpoll-info' => 'Parameters:
* $1 - the number of votes
* $2 - the time and date when the poll was started',
	'ajaxpoll-submitting' => 'Unused at this time.

The identical message is hard-coded in JavaScript code (resources/ajaxpoll.js), and is not localized.',
	'ajaxpoll-vote-permission' => 'Text for viewers who do not have the right to vote.

See also:
* {{msg-mw|Ajaxpoll-revoke-vote}}
* {{msg-mw|Ajaxpoll-no-vote}}',
	'ajaxpoll-revoke-vote' => 'Voters can revoke their vote and this is the message text to be clicked when a voter wants to revoke a previous vote.

The text is only shown for persons who already voted, in an extra line below the block of answers.

See also:
* {{msg-mw|Ajaxpoll-no-vote}}
* {{msg-mw|Ajaxpoll-vote-permission}}',
	'ajaxpoll-vote-revoked' => 'System response that the vote was successfully revoked.

If error, the following message is used:
* {{msg-mw|Ajaxpoll-vote-error}}',
	'ajaxpoll-error-csrf-wrong-token' => 'An error message in case of a wrong received anti-CSRF token',
	'right-ajaxpoll-vote' => '{{doc-right|ajaxpoll-view-results-before-vote}}',
	'right-ajaxpoll-view-results' => '{{doc-right|ajaxpoll-view-results}}',
	'right-ajaxpoll-view-results-before-vote' => '{{doc-right|ajaxpoll-view-results-before-vote}}',
	'action-ajaxpoll-vote' => '{{doc-action|ajaxpoll-vote}}',
	'action-ajaxpoll-view-results' => '{{doc-action|ajaxpoll-view-results}}',
	'action-ajaxpoll-view-results-before-vote' => '{{doc-action|ajaxpoll-view-results-before-vote}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'ajaxpoll-vote-update' => 'U stem is opgedateer.',
	'ajaxpoll-vote-add' => 'U stem is bygevoeg.',
	'ajaxpoll-percent-votes' => '$1% van alle stemme',
	'ajaxpoll-no-vote' => 'Stem asseblief hier onder.',
);

/** Arabic (العربية)
 * @author Asaifm
 * @author Meno25
 * @author Mido
 * @author OsamaK
 * @author Zanatos
 */
$messages['ar'] = array(
	'ajaxpoll-tracking-category' => 'الصفحات مع استطلاع رأي',
	'ajaxpoll-vote-update' => 'تم تحديث صوتك.',
	'ajaxpoll-vote-add' => 'تم إضافة تصويتك',
	'ajaxpoll-percent-votes' => '$1% من جميع الأصوات',
	'ajaxpoll-no-vote' => 'الرجاء التصويت أدناه.',
	'ajaxpoll-info' => 'هناك {{PLURAL:$1||تصويتا واحدا|تصويتين|$1 تصويت|$1 تصويتا|$1 تصويت}} منذ بداية التصويت في $2.',
	'ajaxpoll-submitting' => 'من فضلك انتظر، يرسل صوتك.',
	'ajaxpoll-vote-permission' => 'ليس لك حق التصويت.',
	'ajaxpoll-revoke-vote' => 'أريد سحب تصويتي',
	'ajaxpoll-vote-revoked' => 'تم إلغاء تصويتك بنجاح.',
);

/** Asturian (asturianu)
 * @author McDutchie
 * @author Xuacu
 */
$messages['ast'] = array(
	'ajaxpoll-desc' => "Permite les encuestes basaes n'AJAX con <tt>&lt;poll&gt;</tt>",
	'ajaxpoll-tracking-category' => 'Páxines con una encuesta',
	'ajaxpoll-vote-update' => "El to votu s'anovó.",
	'ajaxpoll-vote-add' => "Amestóse'l to votu.",
	'ajaxpoll-vote-error' => 'Hebo un problema al procesar el to votu; tentalo otra vuelta, por favor.',
	'ajaxpoll-percent-votes' => '$1% de tolos votos',
	'ajaxpoll-your-vote' => 'Ya votasti por "$1" el $2, pues camudar el to votu calcando nuna de les rempuestes d\'abaxo.',
	'ajaxpoll-no-vote' => 'Por favor, vota abaxo.',
	'ajaxpoll-no-vote-results-after-voting' => 'Por favor, vote más abaxo. Los resultaos apaecerán cuando vote.',
	'ajaxpoll-info' => 'Hebo {{PLURAL:$1|un votu|$1 votos}} dende que se creó la encuesta el $2.',
	'ajaxpoll-submitting' => "Aguarda, por favor, ta unviandose'l to votu.",
	'ajaxpoll-vote-permission' => 'Nun tienes drechu al votu.',
	'ajaxpoll-view-results-permission' => "Nun tien permisu pa ver los resultaos d'esta encuesta.",
	'ajaxpoll-view-results-before-vote-permission' => "Nun tien permisu pa ver los resultaos d'esta encuesta antes de votar.",
	'ajaxpoll-revoke-vote' => 'Quiero anular el mio votu',
	'ajaxpoll-vote-revoked' => "El to votu s'anuló.",
	'ajaxpoll-error-csrf-wrong-token' => "Recibióse un pase equivocáu, y nun se cuenta'l so votu.",
	'right-ajaxpoll-vote' => "Pue votar nes encuestes basaes n'AJAX",
	'right-ajaxpoll-view-results' => "Pue ver los resultaos de les encuestes basaes n'AJAX",
	'right-ajaxpoll-view-results-before-vote' => "Pue ver los resultaos de les encuestes basaes n'AJAX enantes de votar",
	'action-ajaxpoll-vote' => "votar nes encuestes basaes n'AJAX",
	'action-ajaxpoll-view-results' => "ver los resultaos de les encuestes basaes n'AJAX",
	'action-ajaxpoll-view-results-before-vote' => "ver los resultaos de les encuestes basaes n'AJAX enantes de votar",
);

/** South Azerbaijani (تورکجه)
 * @author Amir a57
 * @author Mousa
 */
$messages['azb'] = array(
	'ajaxpoll-desc' => '<tt>&lt;poll&gt;</tt> اِتیکِتی یاردیمی ایله AJAX-ه دایانان سس-وئرمگه ایجازه وئرر',
	'ajaxpoll-tracking-category' => 'سس وئرمه‌لری اولان صحیفه‌لر',
	'ajaxpoll-vote-update' => 'سیزین سسینیز گونجل‌لنیبدیر.',
	'ajaxpoll-vote-add' => 'اویونوز علاوه اولوندو.',
	'ajaxpoll-vote-error' => 'سیزین سسینیزی اعمال ائتمک‌ده بیر موشکول قاباغا گلدی، لوطفاً یئنی‌دن چالیشین.',
	'ajaxpoll-percent-votes' => 'بوتون سسلرین $1٪-ی',
	'ajaxpoll-your-vote' => 'سیز قاباقجادان $2-ده «$1»-ه سس وئرمیسینیز، آشاغیدا بیر جاوابی تیکلاماقلا سسینیزی دَییشه بیلرسینیز.',
	'ajaxpoll-no-vote' => 'لوطفاً آشاغیدا سس وئرین.',
	'ajaxpoll-info' => 'سس وئرمه $2-ده یاراناندان بویانا {{PLURAL:$1|بیر|$1}} سس وار ایمیش.',
	'ajaxpoll-submitting' => 'لوطفاً دؤزون، سیزین سسینیز گؤندریلیر.',
	'ajaxpoll-vote-permission' => 'سیزین سس وئرمک حاقینیز یوخدور.',
	'ajaxpoll-revoke-vote' => 'من سسیمی گئری آلماق ایستیرم',
	'ajaxpoll-vote-revoked' => 'سیزین اوغورلا سسینیز گئری آلدینیز.', # Fuzzy
	'right-ajaxpoll-vote' => 'AJAX-ی دایانان سس وئرمه‌لرده سس وئره بیلر',
);

/** Bashkir (башҡортса)
 * @author Alfiya55
 * @author Sagan
 */
$messages['ba'] = array(
	'ajaxpoll-desc' => 'AJAX нигеҙендә <tt>&lt;poll&gt;</tt> тегы ярҙамы менән тауыш биреү мөмкинлеге бар',
	'ajaxpoll-tracking-category' => 'Тауыш биреү бите',
	'ajaxpoll-vote-update' => 'Һеҙҙең тауыш биреү яңыртылды',
	'ajaxpoll-vote-add' => 'Һеҙҙең тауыш иҫәпкә алынды',
	'ajaxpoll-vote-error' => 'Һеҙҙең тауышты иҫәпкә алғанда хата китте, зинһар өсөн ҡабатлап ҡарағыҙ.',
	'ajaxpoll-percent-votes' => 'Бөтә тауыштың $1%',
	'ajaxpoll-your-vote' => 'Һеҙ тауыш бирҙегеҙ «$1» $2. Түбәндәге яуаптарҙы һайлап, яңынан тауыш бирә алаһығыҙ.',
	'ajaxpoll-no-vote' => 'Зинһар өсөн, түбәндә тауыш биреүҙә ҡатнашығыҙ.',
	'ajaxpoll-no-vote-results-after-voting' => 'Зинһар, түбәндә тауыш бирегеҙ.
Һөҙөмтәләр һеҙ тауыш биргәс күрһәтелер.',
	'ajaxpoll-info' => '$2 тауыш биреү башланғандан башлап {{PLURAL:$1|кеше тауыш бирҙе}}.', # Fuzzy
	'ajaxpoll-submitting' => 'Зинһар, һеҙҙең тауыш тураһында мәғлүмәт тапшырылғанын көтөгөз...',
	'ajaxpoll-vote-permission' => 'Һеҙҙең тауыш биреү хоҡуғы юҡ.',
	'ajaxpoll-view-results-permission' => 'Һеҙ был һорауламаның һөҙөмтәләрен ҡарай алмайһығыҙ.',
	'ajaxpoll-view-results-before-vote-permission' => 'Һеҙ был һорауламаның һөҙөмтәләрен тауыш бирмәйенсә ҡарай алмайһығыҙ.',
	'ajaxpoll-revoke-vote' => 'Мин тауышымды кире алырға теләйем',
	'ajaxpoll-vote-revoked' => 'Һеҙ тауышығыҙҙы кире алдығыҙ.',
	'ajaxpoll-error-csrf-wrong-token' => 'Хаталы токен алынды, һеҙҙең тауыш иҫәпләнмәй.',
	'right-ajaxpoll-vote' => 'AJAX нигеҙендә һорау алыуҙа ҡатнаша алаһығыҙ.',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 * @author McDutchie
 */
$messages['bcl'] = array(
	'ajaxpoll-desc' => 'Minatugot sa nakabaseng pirilian kan AJAX na igwang <tt>&lt;poll&gt;</tt> na tatak',
	'ajaxpoll-tracking-category' => 'Mga pahina na igwang pirilian',
	'ajaxpoll-vote-update' => 'An saimong boto pinagsumpayan.',
	'ajaxpoll-vote-add' => 'An saimong boto pinagdugang.',
	'ajaxpoll-vote-error' => 'Igwa nin sarong problem sa pagpoproseso kan saimong boto, tabi paki-otroha giraray.',
	'ajaxpoll-percent-votes' => '$1% kan gabos na mga boto',
	'ajaxpoll-your-vote' => 'Ika nakapagboto na para sa "$1" nin $2, ika mapuwedeng makapagliwat kan saimong boto sa paagi nin pag-klik kan sarong simbag sa ibaba.',
	'ajaxpoll-no-vote' => 'Pakiboto tabi sa ibaba.',
	'ajaxpoll-no-vote-results-after-voting' => 'Tabi magboto sa ibaba. An mga resulta ipapahiling kunsoarin na ika nakapagboto na.',
	'ajaxpoll-info' => 'Igwa nin {{PLURAL:$1|sarong boto|mga $1 boto}} magpoon na an pirilian pinagmukna kan $2.',
	'ajaxpoll-submitting' => 'Pakihalat, pinagsusumite pa an saimong boto.',
	'ajaxpoll-vote-permission' => 'Ika dae puwedeng makapagboto.',
	'ajaxpoll-view-results-permission' => 'Ika dae tituladong magtanaw kan mga resulta kaining pirilian.',
	'ajaxpoll-view-results-before-vote-permission' => 'Ika dae titutladong magtanaw kan mga resulta kaining pirilian bago pa man na ika nakapagboto na.',
	'ajaxpoll-revoke-vote' => 'Gusto kong bawion an sakuyang boto',
	'ajaxpoll-vote-revoked' => 'An saimong boto pinagbawi tabi.',
	'ajaxpoll-error-csrf-wrong-token' => 'Sarong sala na paduos na naresibe, asin an saimong boto pinagbalewala.',
	'right-ajaxpoll-vote' => 'Makakaboto sa mga nakabaseng pirilian kan Ajax',
	'right-ajaxpoll-view-results' => 'Makakahiling sa mga result na yaon nakabase sa AJAX na mga prilian',
	'right-ajaxpoll-view-results-before-vote' => 'Makakatanaw nin mga resulta sa mga pirilian na nakabase sa AJAX bago makapagboto',
	'action-ajaxpoll-vote' => 'magboto sa nakabaseng mga pirilian sa AJAX', # Fuzzy
	'action-ajaxpoll-view-results' => 'tanawon an mga resulta sa pirilian na nakabase sa AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'tanawon an mga result sa pirilian na nakabase sa AJAX bago makapagboto',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'ajaxpoll-desc' => 'Дазваляе AJAX-апытаньні, якія можна дадаць тэгам <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Старонкі з апытаньнямі',
	'ajaxpoll-vote-update' => 'Ваш голас быў абноўлены.',
	'ajaxpoll-vote-add' => 'Ваш голас быў даданы.',
	'ajaxpoll-vote-error' => 'Адбылася памылка падчас захаваньня Вашага голасу, калі ласка, паспрабуйце яшчэ.',
	'ajaxpoll-percent-votes' => '$1% ад усіх галасоў',
	'ajaxpoll-your-vote' => 'Вы ўжо прагаласавалі за варыянт «$1» $2, Вы можаце зьмяніць свой выбар, націснуўжы адзін з пададзеных ніжэй адказаў.',
	'ajaxpoll-no-vote' => 'Калі ласка, прагаласуйце ніжэй.',
	'ajaxpoll-no-vote-results-after-voting' => 'Прагаласуйце, калі ласка, ніжэй. Вынікі зьявяцца, як прагаласуеце.',
	'ajaxpoll-info' => 'З моманту стварэньня галасаваньня $2 {{PLURAL:$1|пададзены $1 голас|пададзеныя $1 галасы|пададзена $1 галасоў}}.',
	'ajaxpoll-submitting' => 'Калі ласкай, чакайце, ваш голас дадаецца.',
	'ajaxpoll-vote-permission' => 'Вы ня можаце галасаваць.',
	'ajaxpoll-view-results-permission' => 'Вы ня можаце праглядаць вынікі гэтага апытаньня.',
	'ajaxpoll-view-results-before-vote-permission' => 'Вы ня можаце праглядаць вынікі гэтага апытаньня, пакуль не прагаласуеце.',
	'ajaxpoll-revoke-vote' => 'Я хачу адклікаць мой голас',
	'ajaxpoll-vote-revoked' => 'Ваш голас быў адкліканы.',
	'ajaxpoll-error-csrf-wrong-token' => 'Атрыманы няслушны токен, ваш голас ня ўлічаны.',
	'right-ajaxpoll-vote' => 'магчымасьць галасаваць у AJAX-апытаньнях',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'ajaxpoll-percent-votes' => '$1% от всички гласове',
);

/** Bengali (বাংলা)
 * @author Nirupam
 */
$messages['bn'] = array(
	'ajaxpoll-tracking-category' => 'আমার নাম নিরুপম । আমি কলকাতাই থাকি । আমি পুনে তে পরাশুনা করি ।',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'ajaxpoll-desc' => 'Aotren ar goulennoù diazezet war AJAX gant <tt>&lt;poll&gt;</tt> tag',
	'ajaxpoll-tracking-category' => 'Pajennoù enno ur sontadeg',
	'ajaxpoll-vote-update' => 'Hizivaet eo bet ho vot.',
	'ajaxpoll-vote-add' => 'Ouzhpennet eo bet ho vot.',
	'ajaxpoll-vote-error' => "Ur gudenn a zo bet pa vezer oc'h ober war-dro ho vot. Mar plij klaskit adarre.",
	'ajaxpoll-percent-votes' => '$1% eus hollad ar mouezhioù',
	'ajaxpoll-your-vote' => 'Votet ho peus dija evit "$1" d\'an $2, tu \'zo deoc\'h kemmañ ho vot en ur klikañ war unan eus ar respontoù da heul.',
	'ajaxpoll-no-vote' => 'Mar plij votit amañ dindan.',
	'ajaxpoll-no-vote-results-after-voting' => "Votit amañ dindan, mar plij. Diskouezet e vo an disoc'hoù pa p'ho votet.",
	'ajaxpoll-info' => "{{PLURAL:$1|vot|$1 vot}} zo bet abaoe ma'z eo bet krouet ar sontadeg war $2.",
	'ajaxpoll-submitting' => "Mar plij gortozit, emeur oc'h ober war-dro ho vot.",
	'ajaxpoll-vote-permission' => "Ne c'hellit ket votiñ.",
	'ajaxpoll-view-results-permission' => "N'oc'h ket aotreet da welet disoc'hoù ar sontadeg-mañ.",
	'ajaxpoll-view-results-before-vote-permission' => "N'oc'h ket aotreet da welet disoc'hoù ar sontadeg-mañ a-raok bezañ votet.",
	'ajaxpoll-revoke-vote' => "C'hoant am eus da zistreiñ war ar pezh am eus votet",
	'ajaxpoll-vote-revoked' => 'Tennet eo bet ho vot.',
	'ajaxpoll-error-csrf-wrong-token' => 'Resevet ez eus bet ur jedouer fall ha dianavezet eo bet ho vot.',
	'right-ajaxpoll-vote' => "A c'hall votiñ er sontadegoù diazezet war AJAX",
	'action-ajaxpoll-vote' => 'votiñ er sontadegoù diazezet war AJAX',
	'action-ajaxpoll-view-results' => "gwelet disoc'hoù ar sontadegoù diazezet war AJAX",
	'action-ajaxpoll-view-results-before-vote' => "gwelet disoc'hoù ar sontadegoù diazezet war AJAX a-raok bezañ votet",
);

/** Catalan (català)
 * @author Papapep
 * @author Pitort
 * @author Qllach
 */
$messages['ca'] = array(
	'ajaxpoll-desc' => "Permet les enquestes basades en AJAX amb l'etiqueta <tt>&lt;poll&gt;</tt>",
	'ajaxpoll-tracking-category' => 'Pàgines amb una enquesta',
	'ajaxpoll-vote-update' => "S'ha enregistrat el vostre vot.",
	'ajaxpoll-vote-add' => "S'ha afegit el vostre vot.",
	'ajaxpoll-vote-error' => 'Hi ha hagut un problema en processar el vostre vot, si us plau torneu a provar una altra vegada.',
	'ajaxpoll-percent-votes' => '$1% del total de vots',
	'ajaxpoll-your-vote' => 'Vostè ja va votar per " $1 " el  $2, podeu canviar el vostre vot fent clic sobre una de les respostes que hi ha més avall.',
	'ajaxpoll-no-vote' => 'Si us plau, voteu a sota.',
	'ajaxpoll-info' => "Hi ha hagut {{PLURAL:$1|un vot|$1 vots}} des que l'enquesta va ser creada el $2.",
	'ajaxpoll-submitting' => 'Espereu si us plau, estem precessant el vostre vot.',
	'ajaxpoll-vote-permission' => 'No teniu dret a vot.',
	'ajaxpoll-revoke-vote' => 'Vull anul·lar el meu vot',
	'ajaxpoll-vote-revoked' => "S'ha anul·lat el vostre vot.",
	'right-ajaxpoll-vote' => 'Podeu votar a les enquestes basades en AJAX',
);

/** Czech (čeština)
 * @author Chmee2
 * @author Michaelbrabec
 * @author Mormegil
 * @author Paxt
 */
$messages['cs'] = array(
	'ajaxpoll-desc' => 'Umožňuje AJAXové průzkumy veřejného mínění pomocí značky <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Stránky s dotazníkem',
	'ajaxpoll-vote-update' => 'Váš hlas byl aktualizován.',
	'ajaxpoll-vote-add' => 'Váš hlas byl přidán.',
	'ajaxpoll-vote-error' => 'Došlo k potížím se zpracováním Vašeho hlasu, zkuste to prosím znovu.',
	'ajaxpoll-percent-votes' => '$1% všech hlasů',
	'ajaxpoll-your-vote' => 'Již jste hlasovali pro " $1 " na  $2 , svůj hlas můžete změnit klepnutím na  odpověď níže.',
	'ajaxpoll-no-vote' => 'Prosím hlasujte níže.',
	'ajaxpoll-no-vote-results-after-voting' => 'Prosím hlasujte níže, výsledky budou zobrazeny poté.',
	'ajaxpoll-info' => '{{PLURAL:$1|Odevzdán jeden hlas|Odevzdány $1 hlasy|Odevzdáno $1 hlasů}} od zahájení ankety dne $2.',
	'ajaxpoll-submitting' => 'Prosím čekejte, Váš hlas se zpracovává...',
	'ajaxpoll-vote-permission' => 'Nemáte oprávnění hlasovat.',
	'ajaxpoll-view-results-before-vote-permission' => 'Nejste oprávněn prohlížet výsledky tohoto průzkumu před vašim hlasováním.',
	'ajaxpoll-revoke-vote' => 'Chci odvolat svůj hlas',
	'ajaxpoll-vote-revoked' => 'Váš hlas byl úspěšně odvolán.',
	'ajaxpoll-error-csrf-wrong-token' => 'Byl přijat chybný token a váš hlas je ignorován.',
	'right-ajaxpoll-vote' => 'Může hlasovat v anketách založených na AJAXu',
);

/** Danish (dansk)
 * @author Overlaet
 * @author Tjernobyl
 */
$messages['da'] = array(
	'ajaxpoll-desc' => 'Giver mulighed for AJAX-baserede afstemninger med <tt>&lt;poll&gt;</tt> tag',
	'ajaxpoll-tracking-category' => 'Sider med en afstemning',
	'ajaxpoll-vote-update' => 'Din stemme er blevet opdateret.',
	'ajaxpoll-vote-add' => 'Din stemme er blevet afgivet.',
	'ajaxpoll-vote-error' => 'Der opstod et problem med behandlingen af din stemme, prøv igen.',
	'ajaxpoll-percent-votes' => '$1% af alle stemmer',
	'ajaxpoll-your-vote' => 'Du har allerede stemt på "$1" $2. Du kan ændre din stemme ved at klikke på et af de nedenstående svar.',
	'ajaxpoll-no-vote' => 'Stem venligst nedenfor.',
	'ajaxpoll-no-vote-results-after-voting' => 'Stem venligst nedenfor. Resultaterne vil blive vist, når du har stemt.',
	'ajaxpoll-info' => 'Der var {{PLURAL:$1|en stemme|$1 stemmer}} siden afstemningen blev oprettet $2.',
	'ajaxpoll-submitting' => 'Vent venligst, din stemme bliver afsendt.',
	'ajaxpoll-vote-permission' => 'Du har ikke ret til at stemme.',
	'ajaxpoll-view-results-permission' => 'Du er ikke berettiget til at få vist resultaterne af denne undersøgelse.',
	'ajaxpoll-view-results-before-vote-permission' => 'Du er ikke berettiget til at få vist resultaterne af denne undersøgelse, før du har stemt.',
	'ajaxpoll-revoke-vote' => 'Jeg vil gerne tilbagekalde min stemme',
	'ajaxpoll-vote-revoked' => 'Din stemme er blevet tilbagekaldt.',
	'right-ajaxpoll-vote' => 'Kan stemme i AJAX-baserede afstemninger',
);

/** German (Deutsch)
 * @author Geitost
 * @author Kghbln
 * @author Metalhead64
 * @author Tim 'Avatar' Bartel
 * @author Wikinaut
 */
$messages['de'] = array(
	'ajaxpoll-desc' => 'Ergänzt das Tag <code>&lt;poll&gt;</code> zum Erstellen AJAX-gestützter Umfragen',
	'ajaxpoll-tracking-category' => 'Seiten mit einer Umfrage',
	'ajaxpoll-vote-update' => 'Deine Stimme wurde aktualisiert.',
	'ajaxpoll-vote-add' => 'Deine Stimme wurde gezählt.',
	'ajaxpoll-vote-error' => 'Es gab ein Problem beim Verarbeiten deiner Stimme. Probiere es bitte noch einmal.',
	'ajaxpoll-percent-votes' => '$1 % aller Stimmen',
	'ajaxpoll-your-vote' => 'Du hast bereits am $2 für „$1“ abgestimmt. Du kannst deine Stimme ändern, indem du eine der untenstehenden Antworten anklickst.',
	'ajaxpoll-no-vote' => 'Bitte stimme unten ab.',
	'ajaxpoll-no-vote-results-after-voting' => 'Bitte unten abstimmen. Die Ergebnisse werden nach der Abstimmung angezeigt.',
	'ajaxpoll-info' => 'Es {{PLURAL:$1|wurde|wurden}} seit Erstellung der Umfrage am $2 {{PLURAL:$1|eine Stimme|$1 Stimmen}} abgegeben.',
	'ajaxpoll-submitting' => 'Bitte warte kurz. Deine Stimme wird verarbeitet.',
	'ajaxpoll-vote-permission' => 'Du bist nicht stimmberechtigt.',
	'ajaxpoll-view-results-permission' => 'Du bist nicht berechtigt, die Ergebnisse dieser Abstimmung anzusehen.',
	'ajaxpoll-view-results-before-vote-permission' => 'Du bist nicht berechtigt, die Ergebnisse dieser Abstimmung anzusehen, bevor du abgestimmt hast.',
	'ajaxpoll-revoke-vote' => 'Ich möchte meine Stimme widerrufen',
	'ajaxpoll-vote-revoked' => 'Deine Stimme wurde widerrufen.',
	'ajaxpoll-error-csrf-wrong-token' => 'Es wurde ein falscher Token empfangen. Deine Stimme wird ignoriert.',
	'right-ajaxpoll-vote' => 'An AJAX-gestützen Umfragen teilnehmen',
	'right-ajaxpoll-view-results' => 'Ergebnisse von AJAX-basierten Umfragen ansehen',
	'right-ajaxpoll-view-results-before-vote' => 'Ergebnisse von AJAX-basierten Umfragen vor der Abstimmung ansehen',
	'action-ajaxpoll-vote' => 'bei AJAX-basierten Umfragen abzustimmen',
	'action-ajaxpoll-view-results' => 'Ergebnisse von AJAX-basierten Umfragen anzusehen',
	'action-ajaxpoll-view-results-before-vote' => 'Ergebnisse von AJAX-basierten Umfragen anzusehen, bevor du abgestimmt hast',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Geitost
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'ajaxpoll-vote-update' => 'Ihre Stimme wurde aktualisiert.',
	'ajaxpoll-vote-add' => 'Ihre Stimme wurde gezählt.',
	'ajaxpoll-vote-error' => 'Es gab ein Problem beim Verarbeiten Ihrer Stimme. Probieren Sie es bitte noch einmal.',
	'ajaxpoll-your-vote' => 'Sie haben bereits am $2 für „$1“ abgestimmt. Sie können Ihre Stimme ändern, indem Sie eine der untenstehenden Antworten anklicken.',
	'ajaxpoll-no-vote' => 'Bitte stimmen Sie unten ab.',
	'ajaxpoll-submitting' => 'Bitte warten Sie kurz. Ihre Stimme wird verarbeitet.',
	'ajaxpoll-vote-permission' => 'Sie sind nicht stimmberechtigt.',
	'ajaxpoll-vote-revoked' => 'Sie haben Ihre Stimme erfolgreich widerrufen.', # Fuzzy
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'ajaxpoll-percent-votes' => '$1% rey heme',
	'ajaxpoll-no-vote' => 'Reya xo bıni de bıde.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'ajaxpoll-desc' => 'Pśidawa toflicku <tt>&lt;poll&gt;</tt> za wótgłosowanja na zakłaźe AJAX',
	'ajaxpoll-tracking-category' => 'Boki z wótgłosowanim',
	'ajaxpoll-vote-update' => 'Twójo wótgłosowanje jo se zaktualizěrowało.',
	'ajaxpoll-vote-add' => 'Twójo wótgłosowanje jo se pśidało.',
	'ajaxpoll-vote-error' => 'Jo problem był pśi pśeźěłowanju twójogo głosa, pšosym wopytaj hyšći raz.',
	'ajaxpoll-percent-votes' => '$1 % wšyknych głosow',
	'ajaxpoll-your-vote' => 'Sy južo $2 za "$1" wótgłosował, móžoš swój głos změniś, z tym až kliknjoš dołojce na wótegrono.',
	'ajaxpoll-no-vote' => 'Pšosym wótgłosuj dołojce.',
	'ajaxpoll-info' => '{{PLURAL:$1|Jo se jaden głos wótedał|Stej se $1 głosa wótedałej|Su se $1 głose wótedali|Jo se $1 głosow wótedało}}, wót casa ako wótgłosowanje jo se $2 napórało.',
	'ajaxpoll-submitting' => 'Pšosym cakaj, twój głos se pśeźěłujo.',
	'ajaxpoll-vote-permission' => 'Njamóžoš wótgłosowaś.',
	'ajaxpoll-revoke-vote' => 'Cu swój głos anulěrowaś',
	'ajaxpoll-vote-revoked' => 'Twój głos jo se anulěrował.',
	'right-ajaxpoll-vote' => 'Na wótgłosowanjach bazěrowanych na AJAX se wobźěliś',
);

/** Greek (Ελληνικά)
 * @author Glavkos
 * @author Protnet
 * @author ZaDiak
 * @author Περίεργος
 */
$messages['el'] = array(
	'ajaxpoll-desc' => 'Επιτρέπει δημοσκοπήσεις βασισμένες σε AJAX με ετικέτα <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Σελίδες με δημοσκόπηση',
	'ajaxpoll-vote-update' => 'Η ψήφος σας έχει ενημερωθεί.',
	'ajaxpoll-vote-add' => 'Η ψήφος σας προστέθηκε.',
	'ajaxpoll-vote-error' => 'Παρουσιάστηκε πρόβλημα κατά την επεξεργασία της ψήφους σας, παρακαλώ ξαναπροσπαθήστε.',
	'ajaxpoll-percent-votes' => '$1% επί των συνολικών ψήφων',
	'ajaxpoll-your-vote' => 'Έχετε ήδη ψηφίσει το $1 στο $2, μπορείτε να αλλάξετε τη ψήφο σας πατώντας μια απάντηση παρακάτω.',
	'ajaxpoll-no-vote' => 'Παρακαλώ ψηφίστε παρακάτω.',
	'ajaxpoll-info' => '{{PLURAL:$1|Υπήρξε μια ψήφος|Υπήρξαν $1 ψήφοι}} από την έναρξη της δημοσκόπησης στις $2.',
	'ajaxpoll-submitting' => 'Παρακαλώ περιμένετε,η ψήφο σας υποβάλλεται.',
	'ajaxpoll-vote-permission' => 'Δεν έχετε δικαίωμα να ψηφίσετε.',
	'ajaxpoll-revoke-vote' => 'Θέλω να ανακαλέσω την ψήφο μου',
	'ajaxpoll-vote-revoked' => 'Αποσύρατε επιτυχώς την ψήφο σας.', # Fuzzy
	'right-ajaxpoll-vote' => 'Μπορεί να ψηφίσει σε δημοσκοπήσεις βασισμένες σε AJAX',
);

/** Esperanto (Esperanto)
 * @author ArnoLagrange
 * @author KuboF
 */
$messages['eo'] = array(
	'ajaxpoll-desc' => 'Ebligas enketojn bazitajn sur AJAX per markilo <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Paĝoj kun enketo',
	'ajaxpoll-vote-update' => 'Via baloto estis ĝisdatigita',
	'ajaxpoll-vote-add' => 'Via baloto estis aldonita',
	'ajaxpoll-vote-error' => 'Estiĝis problemo kun pritrakto de via baloto, bonvolu reprovi.',
	'ajaxpoll-percent-votes' => '$1% el ĉiuj balotoj',
	'ajaxpoll-your-vote' => 'Vi jam balotis por "$1" je "$2", vi povas ŝanĝi vian baloton alklakante iun respondon sube.',
	'ajaxpoll-no-vote' => 'Bonvolu baloti sube.',
	'ajaxpoll-info' => 'Estis {{PLURAL:$1|unu baloto|$1 balotoj}} post kiam la enketo estis kreita sur  $2.',
	'ajaxpoll-submitting' => 'Bonvolu atendi dum traktado de via baloto.',
	'ajaxpoll-vote-permission' => 'Vi ne rajtas baloti.',
	'ajaxpoll-revoke-vote' => 'Mi volas nuligi mian baloton.',
	'ajaxpoll-vote-revoked' => 'Via voĉdono estis nuligita.',
	'right-ajaxpoll-vote' => 'Povas baloti en enketoj bazitaj sur AJAX',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Bola
 * @author Ciencia Al Poder
 * @author Fitoschido
 * @author Ihojose
 * @author Luis Felipe Schenone
 * @author Miguel2706
 * @author VegaDark
 */
$messages['es'] = array(
	'ajaxpoll-desc' => 'Permite encuestas basadas en AJAX con etiqueta <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Páginas con una encuesta',
	'ajaxpoll-vote-update' => 'Tu voto ha sido actualizado.',
	'ajaxpoll-vote-add' => 'Tu voto ha sido añadido.',
	'ajaxpoll-vote-error' => 'Ha habido un problema cuando comprobábamos tu voto, por favor, inténtalo de nuevo.',
	'ajaxpoll-percent-votes' => '$1 % de todos los votos',
	'ajaxpoll-your-vote' => 'Ya votaste por "$1" el $2, puedes cambiar tu voto haciendo clic en una respuesta debajo.',
	'ajaxpoll-no-vote' => 'Realiza tu voto a continuación.',
	'ajaxpoll-no-vote-results-after-voting' => 'Realice tu voto a continuación. Se mostrarán los resultados después de que hayas votado.',
	'ajaxpoll-info' => '{{PLURAL:$1|Ha habido un voto|Han habido $1 votos}} desde que la encuesta fue creada el $2.',
	'ajaxpoll-submitting' => 'Espera un momento, se está enviando el voto.',
	'ajaxpoll-vote-permission' => 'No tienes derecho a votar.',
	'ajaxpoll-view-results-permission' => 'No tienes derecho a ver los resultados de esta encuesta.',
	'ajaxpoll-view-results-before-vote-permission' => 'No tienes derecho a ver los resultados de esta encuesta antes de haber votado.',
	'ajaxpoll-revoke-vote' => 'Quiero revocar mi voto',
	'ajaxpoll-vote-revoked' => 'Tu voto ha sido revocado.',
	'ajaxpoll-error-csrf-wrong-token' => 'Se recibió un token erróneo, y tu voto ha sido ignorado.',
	'right-ajaxpoll-vote' => 'Puede votar en las encuestas basadas en AJAX',
	'right-ajaxpoll-view-results' => 'Puede ver los resultados de las encuentas basadas en AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Puede ver los resultados de las encuestas basadas en AJAX antes de haber votado',
	'action-ajaxpoll-vote' => 'Puede votar en las encuestas basadas en AJAX',
	'action-ajaxpoll-view-results' => 'Ver los resultados de las encuentas basadas en AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'Ver los resultados de las encuentas basadas en AJAX antes de haber votado',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'ajaxpoll-vote-update' => 'Sinu hääl on värskendatud.',
	'ajaxpoll-vote-add' => 'Sinu hääl on lisatud.',
	'ajaxpoll-percent-votes' => '$1% kõigist häältest',
	'ajaxpoll-no-vote' => 'Palun hääleta allpool.',
	'ajaxpoll-submitting' => 'Palun oota, sinu häält lisatakse.',
	'ajaxpoll-vote-permission' => 'Sul ei ole õigust hääletada.',
);

/** Basque (euskara)
 * @author Subi
 */
$messages['eu'] = array(
	'ajaxpoll-percent-votes' => 'Boto guztien %$1a',
);

/** Persian (فارسی)
 * @author Alireza
 * @author Armin1392
 * @author Ebraminio
 * @author Mehdi
 * @author Mjbmr
 * @author Reza1615
 * @author Taha
 */
$messages['fa'] = array(
	'ajaxpoll-desc' => 'رأی‌گیری‌های آی‌جکسی با تگ <tt>&lt;poll&gt;</tt> را اجازه می‌دهد.',
	'ajaxpoll-tracking-category' => 'صفحات با یک نظرسنجی',
	'ajaxpoll-vote-update' => 'رأی شما به روز شد.',
	'ajaxpoll-vote-add' => 'رأی شما افزوده شد.',
	'ajaxpoll-vote-error' => 'در پردازش رأی شما مشکلی پیش آمده، لطفاً دوباره تلاش کنید.',
	'ajaxpoll-percent-votes' => '$1%از کل آرا',
	'ajaxpoll-your-vote' => 'شما برای «$1» در $2 رأی داده‌اید. می‌توانید رأی خود را با کلیک بر پاسح متفاوت دیگری در زیر تغییر دهید.',
	'ajaxpoll-no-vote' => 'لطفاً رای خود را در زیر ثبت کنید.',
	'ajaxpoll-no-vote-results-after-voting' => 'لطفاً در پایین رأی دهید. نتایج وقتی نمایش داده خواهند شد که رأی داده باشید.',
	'ajaxpoll-info' => 'از زمان ایجاد نظرسنجی در $2 {{PLURAL:$1|$1 رأی بوده‌است}}.',
	'ajaxpoll-submitting' => 'لطفاً صبر کنید، درحال ثبت رای شما...',
	'ajaxpoll-vote-permission' => 'شما دارای شرایط لازم برای رای‌دادن نمی‌باشید.',
	'ajaxpoll-view-results-permission' => 'شما حقّ مشاهدهٔ نتایج این رای‌گیری را ندارید.',
	'ajaxpoll-view-results-before-vote-permission' => 'شما مجاز به مشاهدهٔ نتایج این نظرسنجی قبل از اینکه رأی داده باشید نیستید.',
	'ajaxpoll-revoke-vote' => 'قصد دارم رأیم را واگردانی کنم',
	'ajaxpoll-vote-revoked' => 'رأی شما با موفقیت واگردانی شد.',
	'ajaxpoll-error-csrf-wrong-token' => 'یک توکن اشتباه دریافت شد و رأی شما نادیده گرفته شد.',
	'right-ajaxpoll-vote' => 'می‌تواند در نظرخواهی آی‌جکسی رأی دهد',
	'right-ajaxpoll-view-results' => 'نتایج نظرسنجی‌های مبتنی ای‌جکس را می‌توان مشاهده کرد',
	'right-ajaxpoll-view-results-before-vote' => 'نتایج نظرسنجی‌های مبتنی ای‌جکس را می‌توان پیش از داشتن رأی مشاهده کرد',
	'action-ajaxpoll-vote' => 'رأی دادن به نظرسنجی‌های مبتنی ای‌جکس',
	'action-ajaxpoll-view-results' => 'مشاهدهٔ نتایج نظرسنجی‌های مبتنی ای‌‌جکس',
	'action-ajaxpoll-view-results-before-vote' => 'مشاهدهٔ نتایج نظرسنجی‌های مبتنی ای‌‌جکس پیش از داشتن رأی',
);

/** Finnish (suomi)
 * @author Crt
 * @author Harriv
 * @author Jack Phoenix
 * @author Nike
 * @author Snidata
 * @author Stryn
 */
$messages['fi'] = array(
	'ajaxpoll-desc' => 'Mahdollistaa AJAX-pohjaiset gallupit <tt>&lt;poll&gt;</tt>-tagilla',
	'ajaxpoll-tracking-category' => 'Sivut, joissa on kysely',
	'ajaxpoll-vote-update' => 'Äänesi on päivitetty',
	'ajaxpoll-vote-add' => 'Äänesi on lisätty.',
	'ajaxpoll-vote-error' => 'Äänesi prosessoimisessa oli ongelma, yritä uudelleen.',
	'ajaxpoll-percent-votes' => '$1 % kaikista äänistä',
	'ajaxpoll-your-vote' => 'Äänestit jo vaihtoehtoa ”$1” $2, voit muuttaa ääntäsi napsauttamalla vastausta alempana',
	'ajaxpoll-no-vote' => 'Voit äänestää alempana.',
	'ajaxpoll-no-vote-results-after-voting' => 'Voit äänestää alla. Tulokset näytetään, kun olet äänestänyt.',
	'ajaxpoll-info' => '{{PLURAL:$1|Yksi ääni|$1 ääntä}} on annettu siitä lähtien kun tämä äänestys tehtiin, $2.',
	'ajaxpoll-submitting' => 'Odota hetki, äänesi lähetetään kirjattavaksi.',
	'ajaxpoll-vote-permission' => 'Sinulla ei ole oikeutta äänestää.',
	'ajaxpoll-view-results-permission' => 'Sinulla ei ole oikeutta tarkastella kyselyn tuloksia.',
	'ajaxpoll-view-results-before-vote-permission' => 'Et voi katsella kyselyn tuloksia ennen kuin olet äänestänyt.',
	'ajaxpoll-revoke-vote' => 'Haluan peruuttaa ääneni',
	'ajaxpoll-vote-revoked' => 'Äänesi on peruttu.',
	'ajaxpoll-error-csrf-wrong-token' => 'Saatu avain oli virheellinen ja äänesi hylättiin.',
	'right-ajaxpoll-vote' => 'Voi äänestää AJAX-pohjaisissa kyselyissä',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'ajaxpoll-desc' => 'Loyv AJAX-grundaðum atkvøðugreiðslum við <tt>&lt;poll&gt;</tt> lyklaorði',
	'ajaxpoll-tracking-category' => 'Síður við atkvøðugreiðslu',
	'ajaxpoll-vote-update' => 'Tín atkvøða er blivin dagførd.',
	'ajaxpoll-vote-add' => 'Tú hevur nú atkvøtt.',
	'ajaxpoll-vote-error' => 'Tað var ein trupulleiki við viðgerðini av tínari atkvøðu, vinarliga royn aftur.',
	'ajaxpoll-percent-votes' => '$1% av øllum atkvøðum',
	'ajaxpoll-your-vote' => 'Tú atkvøddi fyri "$1" hin $2. Tú kanst broyta tína atkvøðu við at klikkja á eitt annað svar niðanfyri.',
	'ajaxpoll-no-vote' => 'Vinarliga atkvøð niðanfyri.',
	'ajaxpoll-no-vote-results-after-voting' => 'Vinarliga atkvøð niðanfyri. Úrslitini verða víst, tá tú hevur atkvøtt.',
	'ajaxpoll-info' => 'Tað {{PLURAL:$1|var ein atøða|vóru $1 atkvøður}} síðan atkvøðugreiðslan varð upprættað hin $2.',
	'ajaxpoll-submitting' => 'Vinarliga bíða, meðan tín atkvøða verður send inn.',
	'ajaxpoll-vote-permission' => 'Tú hevur ikki atkvøðurætt.',
	'ajaxpoll-view-results-permission' => 'Tú hevur ikki rætt til at síggja úrslitini av hesi atkvøðugreiðsluni.',
	'ajaxpoll-view-results-before-vote-permission' => 'Tú hevur ikki loyvi til at síggja úrslitini av hesi atkvøðugreiðslu, fyrr enn tú hevur atkvøtt.',
	'ajaxpoll-revoke-vote' => 'Eg ynski at taka mína atkvøðu aftur',
	'ajaxpoll-vote-revoked' => 'Tín atkvøða er tikin aftur.',
	'ajaxpoll-error-csrf-wrong-token' => 'Eitt skeivt tekn varð móttikið, og tín atkvøða er ikki skrásett.',
	'right-ajaxpoll-vote' => 'Kann atkvøða í atkvøðugreiðslum, sum byggja á AJAX',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author McDutchie
 * @author Sherbrooke
 * @author Tim 'Avatar' Bartel
 */
$messages['fr'] = array(
	'ajaxpoll-desc' => 'Autorise les interrogations basées sur AJAX avec <tt>&lt;poll&gt;</tt> tag',
	'ajaxpoll-tracking-category' => 'Pages avec un sondage',
	'ajaxpoll-vote-update' => 'Votre vote a été mis à jour.',
	'ajaxpoll-vote-add' => 'Votre vote a été compté.',
	'ajaxpoll-vote-error' => "Il y avait une problème avec le traitement de votre vote. Essayez encore, s'il vous plaît.",
	'ajaxpoll-percent-votes' => '$1% de tous les votes',
	'ajaxpoll-your-vote' => 'Vous avez voté pour « $1 » sur $2. Vous pouvez changer de vote si vous cliquez sur l’un des choix plus bas.',
	'ajaxpoll-no-vote' => 'Merci de voter ci-dessous.',
	'ajaxpoll-no-vote-results-after-voting' => 'Vous pouvez voter ci-dessous. Les résultats seront affichés lorsque vous aurez voté.',
	'ajaxpoll-info' => 'Il y avait {{PLURAL:$1|un vote|$1 votes}} depuis l’élaboration du sondage au $2.',
	'ajaxpoll-submitting' => "Veuillez patienter pendant l'envoi de votre vote...",
	'ajaxpoll-vote-permission' => 'Vous ne pouvez pas voter.',
	'ajaxpoll-view-results-permission' => "Vous n'êtes pas autorisé à voir les résultats de ce sondage.",
	'ajaxpoll-view-results-before-vote-permission' => "Vous n'êtes pas autorisé à voir les résultats de ce sondage avant d'avoir voté.",
	'ajaxpoll-revoke-vote' => 'Je veux annuler mon vote',
	'ajaxpoll-vote-revoked' => 'Votre vote a été révoqué.',
	'ajaxpoll-error-csrf-wrong-token' => 'Un jeton incorrect a été reçu, et votre vote est ignoré.',
	'right-ajaxpoll-vote' => 'Peut voter dans des sondages basés sur AJAX',
	'right-ajaxpoll-view-results' => 'Peut voir les résultats des sondages basés sur AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Peut voir les résultats des sondages basés sur AJAX avant d’avoir voté',
	'action-ajaxpoll-vote' => 'voter dans les sondages basés sur AJAX',
	'action-ajaxpoll-view-results' => 'voir les résultats des sondages basés sur AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'voir les résultats des sondages basés sur AJAX avant d’avoir voté',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'ajaxpoll-tracking-category' => 'Pâges avouéc un sondâjo',
	'ajaxpoll-percent-votes' => '$1 % de tôs los votos',
);

/** Galician (galego)
 * @author Elisardojm
 * @author Toliño
 */
$messages['gl'] = array(
	'ajaxpoll-desc' => 'Permite as enquisas baseadas en AJAX mediante a etiqueta <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Páxinas cunha enquisa',
	'ajaxpoll-vote-update' => 'Actualizouse o seu voto.',
	'ajaxpoll-vote-add' => 'Engadiuse o seu voto.',
	'ajaxpoll-vote-error' => 'Houbo algún problema co procesamento do seu voto. Por favor, inténteo de novo.',
	'ajaxpoll-percent-votes' => '$1% do total dos votos',
	'ajaxpoll-your-vote' => 'Xa votou por "$1" o $2. Pode cambiar o seu voto premendo nunha resposta das que aparecen a continuación.',
	'ajaxpoll-no-vote' => 'Por favor, vote a continuación.',
	'ajaxpoll-no-vote-results-after-voting' => 'Por favor, vote a continuación. Os resultados aparecerán cando vote.',
	'ajaxpoll-info' => '{{PLURAL:$1|Recibiuse un voto|Recibíronse $1 votos}} desde que a enquisa foi creada o $2.',
	'ajaxpoll-submitting' => 'Por favor, agarde durante o envío do seu voto.',
	'ajaxpoll-vote-permission' => 'Non pode votar.',
	'ajaxpoll-view-results-permission' => 'Non ten os permisos necesarios para ver os resultados desta enquisa.',
	'ajaxpoll-view-results-before-vote-permission' => 'Non ten os permisos necesarios para ver os resultados desta enquisa antes de votar.',
	'ajaxpoll-revoke-vote' => 'Quero anular o meu voto',
	'ajaxpoll-vote-revoked' => 'Anulouse o seu voto.',
	'ajaxpoll-error-csrf-wrong-token' => 'Recibiuse un pase incorrecto e ignorouse o seu voto.',
	'right-ajaxpoll-vote' => 'Pode votar nas enquisas baseadas en AJAX',
	'right-ajaxpoll-view-results' => 'Pode ver os resultados das enquisas baseadas en AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Pode ver os resultados das enquisas baseadas en AJAX antes de votar',
	'action-ajaxpoll-vote' => 'votar nas enquisas baseadas en AJAX',
	'action-ajaxpoll-view-results' => 'ver os resultados das enquisas baseadas en AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'ver os resultados das enquisas baseadas en AJAX antes de votar',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'ajaxpoll-desc' => 'Ergänzt s Tag <code>&lt;poll&gt;</code> zum Aalege vu AJAX-gstitzte Umfroge',
	'ajaxpoll-tracking-category' => 'Syte mit ere Umfrog',
	'ajaxpoll-vote-update' => 'Dyy Stimm isch aktualisiert wore.',
	'ajaxpoll-vote-add' => 'Dyy Stimm isch zellt wore.',
	'ajaxpoll-vote-error' => 'S het e Probläm gee bi dr Verarbeitig vu Dyyre Stimm! Versuch s bitte nonemol.',
	'ajaxpoll-percent-votes' => '$1 % vu allne Stimme',
	'ajaxpoll-your-vote' => 'Du hesch scho am $2 fir „$1“ abgstimmt. Du chasch Dyy Stimm ändere, dur des ass eini vu dr Antworte drucksch, wu unte stehn.',
	'ajaxpoll-no-vote' => 'Bitte stimm unte ab.',
	'ajaxpoll-info' => 'Syt em Aalege vu dr Umfrog am $2 {{PLURAL:$1|isch ei Stimm|sin $1 Stimme}} abgee wore.',
	'ajaxpoll-submitting' => 'Bitte warte e Wyyli. Am Ibermittle vu Dyyre Stimm ...',
	'ajaxpoll-vote-permission' => 'Du bisch nit stimmbrächtigt.',
	'ajaxpoll-revoke-vote' => 'Ich wett myy Stimm widerruefe',
	'ajaxpoll-vote-revoked' => 'Du hesch Dyy Stimm erfolgryych widerruefe.', # Fuzzy
	'right-ajaxpoll-vote' => 'Cha bi AJAX-gstitze Umfroge abstimme',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 */
$messages['gu'] = array(
	'ajaxpoll-view-results-before-vote-permission' => 'તમે મતદાન ન કરો ત્યાં સુધી આ સર્વેક્ષણનું પરિણામ જોવા માટે હકદાર નથી.',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author אור שפירא
 */
$messages['he'] = array(
	'ajaxpoll-desc' => 'אפשרות להוסיף הצבעות בטכנולוגיית AJAX באמצעות התג <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'דפים עם סקר',
	'ajaxpoll-vote-update' => 'הקול שלך עודכן.',
	'ajaxpoll-vote-add' => 'הקול שלך נוסף.',
	'ajaxpoll-vote-error' => 'הייתה בעיה בעיבוד הקול שלך, נא לנסות שוב.',
	'ajaxpoll-percent-votes' => '$1% מכל הקולות.',
	'ajaxpoll-your-vote' => 'כבר הצבעת בעד "$1" ב{{GRAMMAR:תחילית|$2}}, אפשר לשנות את קולך באמצעות לחיצה על תשובה להלן.',
	'ajaxpoll-no-vote' => 'נא להצביע להלן.',
	'ajaxpoll-no-vote-results-after-voting' => 'נא להצביע למטה. התוצאות יוצגו אחרי הצבעתך.',
	'ajaxpoll-info' => '{{PLURAL:$1|נקלט קול אחד|נקלטו $1 קולות}} מאז שההצבעה נוצרה ב־$2.',
	'ajaxpoll-submitting' => 'נא להמתין הזמן שליחת הצבעתך.',
	'ajaxpoll-vote-permission' => 'אין לך זכות הצבעה.',
	'ajaxpoll-view-results-permission' => 'אינך רשאי לצפות בתוצאות סקר זה.',
	'ajaxpoll-view-results-before-vote-permission' => 'אינך רשאי לצפות בתוצאות הסקר לפני הצבעה',
	'ajaxpoll-revoke-vote' => 'אני רוצה לבטל את הקול שלי',
	'ajaxpoll-vote-revoked' => 'קולך נפסל.',
	'ajaxpoll-error-csrf-wrong-token' => 'התקבל אסימון לא מכון וההצבעה שלך לא נספרה.',
	'right-ajaxpoll-vote' => 'הצבעה בסקרים מבוססי AJAX.',
	'right-ajaxpoll-view-results' => 'צפייה בסקרים מבוססי AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'הצגת תוצאות של סקרים מבוססי AJAX לפני הצבעה',
	'action-ajaxpoll-vote' => 'להצביע בסקרים מבוססי AJAX',
	'action-ajaxpoll-view-results' => 'לצפות בסקרים מבוסס AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'לצפות בסקרים מבוסס AJAX לפני ההצבעה',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 */
$messages['hi'] = array(
	'ajaxpoll-no-vote' => 'कृपया नीचे वोट दें।',
);

/** Croatian (hrvatski)
 * @author Roberta F.
 */
$messages['hr'] = array(
	'ajaxpoll-revoke-vote' => 'Želim poništiti svoj glas',
	'ajaxpoll-vote-revoked' => 'Vaš je glas poništen.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'ajaxpoll-desc' => 'Přidawa tafličku <tt>&lt;poll&gt;</tt> za wotghosowanja na zakładźe AJAX',
	'ajaxpoll-tracking-category' => 'Strony z wothłosowanjom',
	'ajaxpoll-vote-update' => 'Twoje wothłosowanje je so zaktualizowało.',
	'ajaxpoll-vote-add' => 'Twoje wothłosowanje je so přidało.',
	'ajaxpoll-vote-error' => 'Je problem při předźěłowanju twojeho hłosa był, prošu spytaj hišće raz.',
	'ajaxpoll-percent-votes' => '$1 % wšěch hłosow',
	'ajaxpoll-your-vote' => 'Sy hižo $2 za "$1" wothłosował, móžeš swój hłós změnić, kliknjo deleka na wotmołwu.',
	'ajaxpoll-no-vote' => 'Prošu wothłosuj deleka.',
	'ajaxpoll-no-vote-results-after-voting' => 'Prošu wothłosuj deleka. Wuslědki so pokazaja, hdyž sy wothłosował.',
	'ajaxpoll-info' => '{{PLURAL:$1|Je so jedyn hłós wotedał|Stej so $1 hłosaj wotedałoj|Su so $1 hłosy wotedali|Je so $1 hłosow wotedało}}, wot toho časa, zo wothłosowanje je so $2 wutworiło.',
	'ajaxpoll-submitting' => 'Prošu čakaj, twój hłós so předźěłuje.',
	'ajaxpoll-vote-permission' => 'Njemóžeš wothłosować.',
	'ajaxpoll-view-results-permission' => 'Njejsy prawo, sej wuslědki tutoho wothłosowanja wobhladać.',
	'ajaxpoll-view-results-before-vote-permission' => 'Njejsy prawo, sej wuslědki tutoho wothłosowanja wobhladać, doniž njejsy wothłosował.',
	'ajaxpoll-revoke-vote' => 'Chcu swój hłós anulować',
	'ajaxpoll-vote-revoked' => 'Twój hłós je so anulował.',
	'ajaxpoll-error-csrf-wrong-token' => 'Wopačny token je so přijał, a twój hłós je so ignorował.',
	'right-ajaxpoll-vote' => 'Na wothłosowanjach bazowanych na AJAX so wobdźělić',
	'right-ajaxpoll-view-results' => 'Wuslědki we wothłosowanjach na zakładźe AJAX sej wobhladać',
	'right-ajaxpoll-view-results-before-vote' => 'Wuslědki we wothłosowanjach na zakładźe AJAX sej wobhladać prjedy hač sy wothłosował',
	'action-ajaxpoll-vote' => 'we wothłosowanjach na zakładźe AJAX wothłosować',
	'action-ajaxpoll-view-results' => 'Wuslědki we wothłosowanjach na zakładźe AJAX sej wobhladać',
	'action-ajaxpoll-view-results-before-vote' => 'Wuslědki we wothłosowanjach na zakładźe AJAX sej wobhladać prjedy hač sy wothłosował',
);

/** Hungarian (magyar)
 * @author Dj
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'ajaxpoll-desc' => 'AJAX alapú közvélemény-kutatás <tt>&lt;poll&gt;</tt> cimkével',
	'ajaxpoll-tracking-category' => 'Közvélemény-kutatást tartalmazó lapok',
	'ajaxpoll-vote-update' => 'A szavazatod frissítve.',
	'ajaxpoll-vote-add' => 'A szavazatod rögzítve.',
	'ajaxpoll-vote-error' => 'Hiba történt a szavazás feldolgozása során, próbáld meg később.',
	'ajaxpoll-percent-votes' => 'Az összes szavazat $1%-a',
	'ajaxpoll-your-vote' => 'Már szavaztál a "$1"-re a $2-n, megváltoztathatod a szavazatodat az alábbi válaszra kattintva.',
	'ajaxpoll-no-vote' => 'Kérlek szavazz alant.',
	'ajaxpoll-info' => 'Összesen {{PLURAL:$1|egy|$1}} szavazat érkezett a $2 óta.',
	'ajaxpoll-submitting' => 'Kérlek várj a szavazatod elküldésére.',
	'ajaxpoll-vote-permission' => 'Nem vagy jogosult szavazni.',
	'ajaxpoll-revoke-vote' => 'Vissza akarom vonni a szavazatomat',
	'ajaxpoll-vote-revoked' => 'Sikeresen visszavontad a szavazatodat.', # Fuzzy
	'right-ajaxpoll-vote' => 'Szavazhat az AJAX alapú közvélemény-kutatásokban',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'ajaxpoll-desc' => 'Permitte sondages a base de AJAX con le etiquetta <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Paginas con sondage',
	'ajaxpoll-vote-update' => 'Tu voto ha essite actualisate.',
	'ajaxpoll-vote-add' => 'Tu voto ha essite addite.',
	'ajaxpoll-vote-error' => 'Un problema occurreva durante le tractamento de tu voto. Per favor reproba.',
	'ajaxpoll-percent-votes' => '$1% de tote le votos',
	'ajaxpoll-your-vote' => 'Tu ha ja votate pro "$1" in $2. Tu pote cambiar tu voto per cliccar super un responsa hic infra.',
	'ajaxpoll-no-vote' => 'Vota hic infra, per favor.',
	'ajaxpoll-no-vote-results-after-voting' => 'Vota hic infra, per favor. Le resultatos essera monstrate quando tu ha votate.',
	'ajaxpoll-info' => 'Il habeva $1 {{PLURAL:$1|voto|votos}} post le creation del sondage al $2.',
	'ajaxpoll-submitting' => 'Un momento, tu voto es submittite.',
	'ajaxpoll-vote-permission' => 'Tu non es autorisate a votar.',
	'ajaxpoll-view-results-permission' => 'Tu non es autorisate a vider le resultatos de iste sondage.',
	'ajaxpoll-view-results-before-vote-permission' => 'Tu non es autorisate a vider le resultatos de iste sondage ante de haber votate.',
	'ajaxpoll-revoke-vote' => 'Io vole revocar mi voto',
	'ajaxpoll-vote-revoked' => 'Tu voto ha essite revocate.',
	'ajaxpoll-error-csrf-wrong-token' => 'Un indicio incorrecte ha essite recipite, e tu voto es ignorate.',
	'right-ajaxpoll-vote' => 'Pote votar in sondages a base de AJAX',
	'right-ajaxpoll-view-results' => 'Pote vider resultatos in sondages basate sur AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Pote vider resultatos in sondages basate sur AJAX ante de haber votate',
	'action-ajaxpoll-vote' => 'votar in sondages basate sur AJAX',
	'action-ajaxpoll-view-results' => 'vider resultatos in sondages basate sur AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'vider resultatos in sondages basate sur AJAX ante de haber votate',
);

/** Indonesian (Bahasa Indonesia)
 * @author Anashir
 * @author Farras
 * @author Rv77ax
 */
$messages['id'] = array(
	'ajaxpoll-desc' => 'Memungkinkan jajak pendapat berbasis AJAX dengan tag <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Halaman dengan jajak pendapat',
	'ajaxpoll-vote-update' => 'Suara Anda telah diperbarui.',
	'ajaxpoll-vote-add' => 'Suara Anda telah ditambahkan.',
	'ajaxpoll-vote-error' => 'Ada masalah dengan pengolahan suara anda, silahkan coba lagi.',
	'ajaxpoll-percent-votes' => '$1% dari semua suara',
	'ajaxpoll-your-vote' => 'Anda sudah memberi suara untuk "$1" pada $2. Anda bisa mengubah suara Anda dengan mengklik jawaban di bawah.',
	'ajaxpoll-no-vote' => 'Silakan beri suara di bawah.',
	'ajaxpoll-no-vote-results-after-voting' => 'Silakan berikan suara. Hasil akan ditampilkan setelah Anda memberikan suara.',
	'ajaxpoll-info' => 'Ada {{PLURAL:$1|satu suara|$1 suara}} sejak jajak pendapat ini dibuat pada $2.',
	'ajaxpoll-submitting' => 'Silakan tunggu. Sedang mengirimkan suara Anda.',
	'ajaxpoll-vote-permission' => 'Anda tidak dapat memberikan suara.',
	'ajaxpoll-view-results-permission' => 'Anda tidak berhak untuk melihat hasil jajak pendapat ini.',
	'ajaxpoll-view-results-before-vote-permission' => 'Anda tidak berhak untuk melihat hasil jajak pendapat ini sebelum Anda memberikan suara.',
	'ajaxpoll-revoke-vote' => 'Saya ingin membatalkan suara saya',
	'ajaxpoll-vote-revoked' => 'Pungutan suara anda telah dibatalkan.',
	'ajaxpoll-error-csrf-wrong-token' => 'Sebuah token yang salah telah diterima, dan suara Anda diabaikan.',
	'right-ajaxpoll-vote' => 'Dapat memberi suara di jajak pendapat berbasis AJAX',
);

/** Icelandic (íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'ajaxpoll-tracking-category' => 'Síður með skoðanakönnun',
	'ajaxpoll-vote-update' => 'Atkvæði þitt hefur verið uppfært.',
	'ajaxpoll-vote-add' => 'Atkvæði þínu hefur verið viðbætt.',
	'ajaxpoll-percent-votes' => '$1% allra atkvæða',
	'ajaxpoll-your-vote' => 'Þú kaust „$1“ þann $2. Þú getur breytt atkvæði þínu með því að smella á annað svar fyrir neðan.',
	'ajaxpoll-no-vote' => 'Gerðu svo vel og kjóstu fyrir neðan.',
	'ajaxpoll-no-vote-results-after-voting' => 'Gerðu svo vel og kjóstu fyrir neðan. Niðurstöðurnar verða sýndar þegar þú hefur kosið.',
	'ajaxpoll-vote-permission' => 'Þú hefur ekki rétt til þess að kjósa.',
	'ajaxpoll-view-results-permission' => 'Þú hefur ekki rétt til þess að sjá niðurstöður þessarar skoðanakönnunar.',
	'ajaxpoll-view-results-before-vote-permission' => 'Þú hefur ekki rétt til þess að sjá niðurstöður þessarar skoðanakönnunar áður en þú hefur kosið.',
	'ajaxpoll-revoke-vote' => 'Ég vil endurkalla atkvæði mitt.',
	'ajaxpoll-vote-revoked' => 'Þér tókst að endurkalla atkvæðið þitt.', # Fuzzy
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'ajaxpoll-desc' => 'Permette sondaggi tramite AJAX con il tag <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Pagine con un sondaggio',
	'ajaxpoll-vote-update' => 'Il tuo voto è stato aggiornato.',
	'ajaxpoll-vote-add' => 'Il tuo voto è stato aggiunto.',
	'ajaxpoll-vote-error' => "C'è stato un problema con l'elaborazione del tuo voto, si prega di riprovare.",
	'ajaxpoll-percent-votes' => '$1% di tutti i voti',
	'ajaxpoll-your-vote' => 'Hai già votato per "$1" su $2, è possibile cambiare il tuo voto cliccando una risposta qui sotto.',
	'ajaxpoll-no-vote' => 'Si prega di votare sotto.',
	'ajaxpoll-no-vote-results-after-voting' => 'Vota qui sotto. I risultati ti verranno mostrati una volta che avrai votato.',
	'ajaxpoll-info' => "{{PLURAL:$1|C'è stato un voto|Ci sono stati $1 voti}} dal quando il sondaggio è stato creato il $2.",
	'ajaxpoll-submitting' => 'Attendere prego, stiamo elaborando il tuo voto.',
	'ajaxpoll-vote-permission' => 'Non hai diritto di voto.',
	'ajaxpoll-view-results-permission' => 'Non sei autorizzato a visualizzare i risultati di questo sondaggio.',
	'ajaxpoll-view-results-before-vote-permission' => 'Non sei autorizzato a visualizzare i risultati di questo sondaggio prima di aver votato.',
	'ajaxpoll-revoke-vote' => 'Voglio revocare il mio voto',
	'ajaxpoll-vote-revoked' => 'Hai revocato con successo il tuo voto.',
	'ajaxpoll-error-csrf-wrong-token' => 'È stato ricevuto un token errato, e il tuo voto verrà ignorato.',
	'right-ajaxpoll-vote' => 'Vota nei sondaggi tramite AJAX',
	'right-ajaxpoll-view-results' => 'Può vedere i risultati nei sondaggi tramite AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Può vedere i risultati nei sondaggi tramite AJAX prima di aver votato',
	'action-ajaxpoll-vote' => 'votare nei sondaggi tramite AJAX',
	'action-ajaxpoll-view-results' => 'vedere i risultati nei sondaggi tramite AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'vedere i risultati nei sondaggi tramite AJAX prima di aver votato',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 * @author Shun Fukuzawa
 */
$messages['ja'] = array(
	'ajaxpoll-desc' => '<tt>&lt;poll&gt;</tt> タグで Ajax ベースの投票所を使用できるようにする',
	'ajaxpoll-tracking-category' => '投票所があるページ',
	'ajaxpoll-vote-update' => '投票を更新しました。',
	'ajaxpoll-vote-add' => '投票を追加しました。',
	'ajaxpoll-vote-error' => '投票の処理中に問題が発生しました。再投票してください。',
	'ajaxpoll-percent-votes' => '全体の $1%',
	'ajaxpoll-your-vote' => '$2について「$1」に投票済みです。以下で別の回答をクリックすると投票を変更できます。',
	'ajaxpoll-no-vote' => '投票してください。',
	'ajaxpoll-no-vote-results-after-voting' => '以下で投票してください。投票すると、投票結果が表示されます。',
	'ajaxpoll-info' => '$2 に投票所が作成されて以来、{{PLURAL:$1|$1 票}}の投票がありました。',
	'ajaxpoll-submitting' => '投票を送信しています。お待ちください。',
	'ajaxpoll-vote-permission' => 'あなたには投票権がありません。',
	'ajaxpoll-view-results-permission' => 'あなたには、この投票所の結果を閲覧する権限がありません。',
	'ajaxpoll-view-results-before-vote-permission' => '投票を終えるまで、あなたはこの投票の結果を見ることができません。',
	'ajaxpoll-revoke-vote' => '自分の投票を取り消したい',
	'ajaxpoll-vote-revoked' => '投票を取り消しました。',
	'ajaxpoll-error-csrf-wrong-token' => '誤ったトークンを受信したため、あなたの投票は無視されます。',
	'right-ajaxpoll-vote' => 'Ajax ベースの投票所で投票',
	'right-ajaxpoll-view-results' => 'Ajax ベースの投票所で結果を閲覧',
	'right-ajaxpoll-view-results-before-vote' => 'Ajax ベースの投票所で投票前に結果を閲覧',
	'action-ajaxpoll-vote' => 'Ajax ベースの投票所での投票',
	'action-ajaxpoll-view-results' => 'Ajax ベースの投票所で結果の閲覧',
	'action-ajaxpoll-view-results-before-vote' => 'Ajax ベースの投票所で投票前に結果を閲覧',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'ajaxpoll-tracking-category' => 'გვერდები გამოკითხვებით',
	'ajaxpoll-vote-update' => 'თქვენი ხმა განახლდა.',
	'ajaxpoll-vote-add' => 'თქვენი ხმა დაემატა.',
	'ajaxpoll-vote-error' => 'თქვენი ხმის დამუშავებისას მოხდა შეცდომა, გთხოვთ, კიდევ სცადეთ.',
	'ajaxpoll-percent-votes' => 'ყველა ხმის $1%',
	'ajaxpoll-no-vote' => 'გთხოვთ, ხმა მისცეთ ქვევით.',
	'ajaxpoll-submitting' => 'გთხოვთ, მოიცადეთ თქვენი ხმა მუშავდება.',
	'ajaxpoll-vote-permission' => 'თქვენ არ შეგიძლიათ ხმის მიცემა.',
	'ajaxpoll-revoke-vote' => 'მე მინდა ჩემი ხმის გაუქმება',
	'ajaxpoll-vote-revoked' => 'თქვენი ხმა გაუქმებულია.',
);

/** Korean (한국어)
 * @author Hym411
 * @author Priviet
 * @author Yjs5497
 * @author 아라
 */
$messages['ko'] = array(
	'ajaxpoll-desc' => '<tt>&lt;poll&gt;</tt> 태그로 AJAX 기반 투표를 할 수 있습니다',
	'ajaxpoll-tracking-category' => '설문 조사 문서',
	'ajaxpoll-vote-update' => '투표를 업데이트했습니다.',
	'ajaxpoll-vote-add' => '투표를 추가했습니다.',
	'ajaxpoll-vote-error' => '투표를 처리하는 데 문제가 있습니다. 다시 시도하세요.',
	'ajaxpoll-percent-votes' => '모든 투표 중 $1%',
	'ajaxpoll-your-vote' => '이미 $2에 "$1"(을)를 투표했습니다. 아래의 답변을 클릭하여 투표를 바꿀 수 있습니다.',
	'ajaxpoll-no-vote' => '아래에 투표하세요.',
	'ajaxpoll-no-vote-results-after-voting' => '아래에서 투표하세요. 투표를 하면 결과가 보입니다.',
	'ajaxpoll-info' => '$2에 설문 조사가 만들어진 뒤 {{PLURAL:$1|1표|$1표}}가 있습니다.',
	'ajaxpoll-submitting' => '투표를 제출하는 동안 잠시 기다려주세요.',
	'ajaxpoll-vote-permission' => '투표를 받을 수 없습니다.',
	'ajaxpoll-view-results-permission' => '당신은 이 투표의 결과를 볼 자격이 없습니다.',
	'ajaxpoll-view-results-before-vote-permission' => '투표하기 전까지는 이 투표의 결과를 볼 권한이 없습니다.',
	'ajaxpoll-revoke-vote' => '투표를 취소합니다',
	'ajaxpoll-vote-revoked' => '성공적으로 투표를 취소했습니다.',
	'ajaxpoll-error-csrf-wrong-token' => '잘못된 토큰이 전달되어, 투표가 무시되었습니다.',
	'right-ajaxpoll-vote' => 'AJAX 기반 설문 조사에 투표할 수 있음',
	'right-ajaxpoll-view-results' => 'AJAX 기반의 투표 결과를 볼 수 있습니다',
	'right-ajaxpoll-view-results-before-vote' => '투표하기 전 AJAX기반 설문조사 결과를 볼 수 있습니다',
	'action-ajaxpoll-vote' => 'AJAX기반 조사에 투표하기',
	'action-ajaxpoll-view-results' => 'AJAX기반 조사 결과 보기',
	'action-ajaxpoll-view-results-before-vote' => '투표하기 전 AJAX 기반 투표 결과 보기',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'ajaxpoll-desc' => 'Deiht dä Befähl <code lang="en">&lt;poll&gt;</code> en et Wiki, öm Ömfroore maache ze künne, di op <i lang="en">AJAX</i> boue.',
	'ajaxpoll-tracking-category' => 'Sigge med ener Ömfrooch',
	'ajaxpoll-vote-update' => 'Ding Schtemm es äänjepaß.',
	'ajaxpoll-vote-add' => 'Ding Schtemm es jezallt.',
	'ajaxpoll-vote-error' => 'Doh hät jät nit jeflupp mem Beärbeide vun Dinge Schtemm. Bes esu jood_un versöhg_et norr_ens.',
	'ajaxpoll-percent-votes' => '$1% vun all Schtemme',
	'ajaxpoll-your-vote' => 'Do häs aam $2 ald för „$1“ jeschtemmp. Do kanns Ding Scheimme ändere. Doför moß De onge op en Antwoot klecke.',
	'ajaxpoll-no-vote' => 'Onge kanns De afschtemme.',
	'ajaxpoll-no-vote-results-after-voting' => 'donn onge afschtemme. Wad eruß kohm kriß De aanjezeisch, wann De afjeschtemmp häs.',
	'ajaxpoll-info' => 'Et {{PLURAL:$1|wood ein Schtemm|woodte $1 Schtemme|wood kein Schtemm}} afjejovve zigg aam $2 di Ömfrooch aanjelaat wood.',
	'ajaxpoll-submitting' => 'Ene kleine Momang, Ding Schtemm weed enjedraare.',
	'ajaxpoll-vote-permission' => 'Do be nit schtemmberääschtesch.',
	'ajaxpoll-view-results-permission' => 'Do häs nid et Rääsch, ze beloore, wat erus jekumme es.',
	'ajaxpoll-view-results-before-vote-permission' => 'Do häs nid et Rääsch, ze beloore, wat erus jekumme es, ih dat de sällver affjeschtemmp häs.',
	'ajaxpoll-revoke-vote' => 'Esch well ming Schtemm zerökträcke',
	'ajaxpoll-vote-revoked' => 'Deng Schtemm es zerökjetroke.',
	'ajaxpoll-error-csrf-wrong-token' => 'Mer hatte e problehm med ener verkehte Könnong, dröm weed dat jäz nit jezallt.',
	'right-ajaxpoll-vote' => 'Darf en Afschtemmonge metmaache, di op <i lang="en">AJAX</i> boue',
	'right-ajaxpoll-view-results' => 'Darv en Afschtemmonge, di op <i lang="en">AJAX</i> boue, beloore wad erus kohm.',
	'right-ajaxpoll-view-results-before-vote' => 'Darv en Afschtemmonge, di op <i lang="en">AJAX</i> boue, beloore, wad erus kohm, der ohne sellver afjeschtemmp ze han.',
	'action-ajaxpoll-vote' => 'bei Afschtemmonge, di op <i lang="en">AJAX</i> boue, metmaache',
	'action-ajaxpoll-view-results' => 'bei Afschtemmonge, di op <i lang="en">AJAX</i> boue, beloore wad erus kohm',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'ajaxpoll-desc' => 'Erlaabt AJAX-baséiert Ëmfroe mam Tag <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Säite mat enger Ëmfro',
	'ajaxpoll-vote-update' => 'Är Stëmm gouf aktualiséiert.',
	'ajaxpoll-vote-add' => 'Är Stëmm gouf derbäigesat.',
	'ajaxpoll-vote-error' => 'Et gouf e Problem beim Verschaffe vun Ärer Stëmm, probéiert et w.e.g. nach eng kéier.',
	'ajaxpoll-percent-votes' => '$1% vun alle Stëmmen',
	'ajaxpoll-your-vote' => 'Dir hutt schonn den $2 fir "$1" gestëmmt, Dir kënnt Är Stëmm änneren an deem Dir op d\'Äntwert hei drënner klickt.',
	'ajaxpoll-no-vote' => 'Stëmmt w.e.g hei drënner mat of.',
	'ajaxpoll-no-vote-results-after-voting' => "Gitt Är Stëmm w.e.g. hei drënner of. D'Resultater gi gewise soubal wéi Dir ofgestëmmt hutt.",
	'ajaxpoll-info' => 'Zënter dem Ufank vun der Ëmfro den $2 {{PLURAL:$1 gouf eng Stëmm|goufe(n) $1 Stëmmen}} ofginn.',
	'ajaxpoll-submitting' => 'Waart w.e.g., Är Stëmm gëtt verschafft.',
	'ajaxpoll-vote-permission' => 'Dir sidd net berechtegt fir ofzestëmmen.',
	'ajaxpoll-view-results-permission' => "Dir sidd net berechtegt fir d'Resultater vun dëser Ofstëmmung ze kucken.",
	'ajaxpoll-view-results-before-vote-permission' => "Dir sidd net berechtegt fir d'Resultater vun dëser Ofstëmmung ze kucken ier Dir ofgestëmmt hutt.",
	'ajaxpoll-revoke-vote' => 'Ech wëll meng Stëmm zréckzéien',
	'ajaxpoll-vote-revoked' => 'Är Stëmm gouf zréckgeruff.',
	'ajaxpoll-error-csrf-wrong-token' => 'E falschen Token koum un an Är Stëmm gouf ignoréiert.',
	'right-ajaxpoll-vote' => 'Däerf bei AJAX-baséierten Ëmfroe matmaachen',
	'right-ajaxpoll-view-results' => 'Däerf Resultater vun AJAX-baséierten Ëmfroe kucken',
	'right-ajaxpoll-view-results-before-vote' => 'däerf Resultater vun AJAX-baséierten Ëmfroe virum Ofstëmme kucken',
	'action-ajaxpoll-vote' => 'bäi AJAX-baséierten Ëmfroe matmaachen',
	'action-ajaxpoll-view-results' => 'Resultater vun AJAX-baséierten Ëmfroe kucken',
	'action-ajaxpoll-view-results-before-vote' => 'Resultater vun AJAX-baséierten Ëmfroe virum Ofstëmme kucken',
);

/** Lithuanian (lietuvių)
 * @author Audriusa
 * @author Eitvys200
 * @author Mantak111
 */
$messages['lt'] = array(
	'ajaxpoll-tracking-category' => 'Puslapiai su apklausa',
	'ajaxpoll-vote-update' => 'Jūsų balsas buvo atnaujintas.',
	'ajaxpoll-vote-add' => 'Jūsų balsas buvo pridėtas.',
	'ajaxpoll-percent-votes' => '$1% visų balsų',
	'ajaxpoll-no-vote' => 'Prašome balsuoti žemiau.',
	'ajaxpoll-no-vote-results-after-voting' => 'Prašome balsuoti žemiau. Rezultatai bus rodomi, kai jus balsuosite.',
	'ajaxpoll-submitting' => 'Prašome palaukti, siunčiame jūsų balsą.',
	'ajaxpoll-vote-permission' => 'Jūs neturite balsavimo teisės.',
	'ajaxpoll-revoke-vote' => 'Noriu atsiimti savo balsą',
	'ajaxpoll-vote-revoked' => 'Jūs atsiėmėte savo balsą.', # Fuzzy
	'right-ajaxpoll-vote' => 'Gali balsuoti AJAX apklausuose',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'ajaxpoll-vote-update' => 'Jūsu balss tika izmainīta.',
	'ajaxpoll-vote-add' => 'Jūsu balss tika pievienota.',
	'ajaxpoll-percent-votes' => '$1% no visām balsīm',
	'ajaxpoll-vote-permission' => 'Jums nav tiesību balsot.',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author StefanusRA
 */
$messages['map-bms'] = array(
	'ajaxpoll-desc' => 'Ngolihna jajak pendapat sing basise-AJAX nganggo tag <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Kaca sing karo jajak pendapat',
	'ajaxpoll-vote-update' => 'Swarane Rika wis dianyari.',
	'ajaxpoll-vote-add' => 'Swarane Rika wis ditambahna.',
	'ajaxpoll-vote-error' => 'Ana masalah dong lagi mroses swarane Rika, monggo jajal maning.',
	'ajaxpoll-percent-votes' => '$1% sekang kabeh swara',
	'ajaxpoll-your-vote' => 'Rika wis aweh swara nggo "$1" dong $2, Rika teyeng ngowaih swarane Rika yakuwe karo ngeklik jawaban nang ngisor kiye.',
	'ajaxpoll-no-vote' => 'Monggo aweh swara nang ngisor kiye.',
	'ajaxpoll-info' => 'Wis ana {{PLURAL:$1|siji swara|$1 swara}} wiwit jajak pendapat kiye digawe dong $2.',
	'ajaxpoll-submitting' => 'Monggo dienteni, lagi ngirimna swarane Rika.',
	'ajaxpoll-vote-permission' => 'Rika ora olih melu aweh swara.',
	'ajaxpoll-revoke-vote' => 'Inyong arep mbatalna swarane inyong.',
	'ajaxpoll-vote-revoked' => 'Rika wis sukses gole mbatalna swarane Rika.', # Fuzzy
	'right-ajaxpoll-vote' => 'Teyeng aweh swara nang jajak pendapat basis-AJAX',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author McDutchie
 */
$messages['mk'] = array(
	'ajaxpoll-desc' => 'Овозможува анкети на основа на AJAX со ознаката <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Страници со анкета',
	'ajaxpoll-vote-update' => 'Вашиот глас е подновен.',
	'ajaxpoll-vote-add' => 'Вашиот глас е додаден.',
	'ajaxpoll-vote-error' => 'Се појави проблем при обработката на вашиот глас. Обидете се повторно.',
	'ajaxpoll-percent-votes' => '$1% од вкупниот број на гласови',
	'ajaxpoll-your-vote' => 'Веќе имате гласано за „$1“ на $2; можете да го промените гласот стискајќи на еден од одговорите подолу.',
	'ajaxpoll-no-vote' => 'Гласајте подолу.',
	'ajaxpoll-no-vote-results-after-voting' => 'Дајте го вашиот глас подолу. Исходот ќе се прикаже откако ќе гласате.',
	'ajaxpoll-info' => 'Откако е создадена анкетата ($2) {{PLURAL:$1|даден еден глас|дадени се $1 гласа}}.',
	'ajaxpoll-submitting' => 'Почекајте, го заведувам вашиот глас.',
	'ajaxpoll-vote-permission' => 'Не можете да гласате.',
	'ajaxpoll-view-results-permission' => 'Немате право да го гледате исходот од анкетава.',
	'ajaxpoll-view-results-before-vote-permission' => 'Немате право да го гледате исходот од анкетава пред да гласате.',
	'ajaxpoll-revoke-vote' => 'Сакам да го повлечам гласот',
	'ajaxpoll-vote-revoked' => 'Вашиот глас е повлечен.',
	'ajaxpoll-error-csrf-wrong-token' => 'Добив погрешна шифра. Вашиот глас е занемарен.',
	'right-ajaxpoll-vote' => 'Може да гласа на анкети на основа на AJAX.',
	'right-ajaxpoll-view-results' => 'Може да гледа резултати од анкети со AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Може да гледа резултати од анкети со AJAX без да има гласано',
	'action-ajaxpoll-vote' => 'гласање во анкети со AJAX',
	'action-ajaxpoll-view-results' => 'преглед на резултати од анкети со AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'преглед на резултати од анкети со AJAX без да имате гласано',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Suresh.balasubra
 */
$messages['ml'] = array(
	'ajaxpoll-tracking-category' => 'വോട്ടെടുപ്പ് ഉള്ള താളുകൾ',
	'ajaxpoll-vote-update' => 'താങ്കളുടെ വോട്ട് രേഖപ്പെടുത്തിയിരിക്കുന്നു.',
	'ajaxpoll-vote-add' => 'താങ്കളുടെ വോട്ട് ചേർത്തു.',
	'ajaxpoll-vote-error' => 'താങ്കളുടെ വോട്ട് തയ്യാറാക്കുന്നതിനിടയിൽ ഒരു തകരാറ് സംഭവിച്ചിരിക്കുന്നു, ദയവായി വീണ്ടും ശ്രമിക്കുക.',
	'ajaxpoll-percent-votes' => 'ആകെ വോട്ടുകളുടെ $1%',
	'ajaxpoll-no-vote' => 'താഴെ വോട്ട് ചെയ്യുക',
	'ajaxpoll-no-vote-results-after-voting' => 'താഴെ വോട്ട് ചെയ്യുക. വോട്ട് ചെയ്ത ശേഷം തിരഞ്ഞെടുപ്പ്‌ ഫലങ്ങൾ കാണാവുന്നതാണ്.',
	'ajaxpoll-info' => '$2ൽ തിരഞ്ഞെടുപ്പ് ആരംഭിച്ച ശേഷം {{PLURAL:$1|ഒരു വോട്ട്|$1 വോട്ടുകൾ}} രേഖപ്പെടുത്തി.',
	'ajaxpoll-submitting' => 'ദയവായി കാത്തിരിക്കുക, താങ്കളുടെ വോട്ട് സമർപ്പിക്കുന്നു.',
	'ajaxpoll-vote-permission' => 'താങ്കൾക്ക് വോട്ട് ചെയ്യാനുള്ള അനുമതിയില്ല.',
	'ajaxpoll-view-results-permission' => 'താങ്കൾക്ക് തിരഞ്ഞെടുപ്പ്‌ ഫലങ്ങൾ കാണാനുള്ള അനുമതിയില്ല.',
	'ajaxpoll-view-results-before-vote-permission' => 'വോട്ട് ചെയ്യുന്നതിന് മുൻപ് തിരഞ്ഞെടുപ്പ്‌ ഫലങ്ങൾ കാണുവാൻ താങ്കൾക്ക് അനുമതിയില്ല.',
	'ajaxpoll-revoke-vote' => 'എന്റെ വോട്ട് തിരിച്ചെടുക്കാൻ ആഗ്രഹിക്കുന്നു',
	'ajaxpoll-vote-revoked' => 'താങ്കളുടെ വോട്ട് തിരിച്ചെടുത്തിരിക്കുന്നു.',
	'ajaxpoll-error-csrf-wrong-token' => 'തെറ്റായ ചീട്ട് കിട്ടിയതിനാൽ താങ്കളുടെ വോട്ട് അവഗണിക്കപ്പെട്ടിരിക്കുന്നു.',
	'right-ajaxpoll-vote' => 'അജാക്സ് അധിഷ്‌ഠിതമായ തിരഞ്ഞെടുപ്പിൽ വോട്ട് ചെയ്യാം.',
	'right-ajaxpoll-view-results' => 'അജാക്സ് അധിഷ്ഠിതമായ തിരഞ്ഞെടുപ്പുകളുടെ ഫലം കാണാം',
	'right-ajaxpoll-view-results-before-vote' => 'വോട്ട് ചെയ്യുന്നതിന് മുൻപ് അജാക്സ് അധിഷ്ഠിതമായ തിരഞ്ഞെടുപ്പുകളുടെ ഫലം കാണാം',
	'action-ajaxpoll-vote' => 'അജാക്സ് അധിഷ്ഠിതമായ തിരഞ്ഞെടുപ്പുകളിൽ വോട്ട് ചെയ്യുക.',
	'action-ajaxpoll-view-results' => 'അജാക്സ് അധിഷ്ഠിതമായ തിരഞ്ഞെടുപ്പുകളുടെ ഫലം കാണുക',
	'action-ajaxpoll-view-results-before-vote' => 'വോട്ട് ചെയ്യുന്നതിന് മുൻപ് അജാക്സ് അധിഷ്ഠിതമായ തിരഞ്ഞെടുപ്പുകളുടെ ഫലം കാണുക',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'ajaxpoll-tracking-category' => 'मतदानासहित असलेली पाने',
	'ajaxpoll-vote-update' => 'आपले मत अद्यतन करण्यात आलेले आहे.',
	'ajaxpoll-vote-add' => 'आपले मत जोडल्या गेले आहे.',
	'ajaxpoll-vote-error' => 'आपले मतावर प्रक्रिया करण्यात अडचण आली आहे, कृपया पुन्हा प्रयत्न करा.',
	'ajaxpoll-percent-votes' => 'सर्व मतांच्या $1%',
	'ajaxpoll-your-vote' => '$2 वर "$1"साठी आपण मत नोंदविले.आपण आपले मतदान, खालील दुसरे कारण निवडून, बदलू शकता.',
	'ajaxpoll-no-vote' => 'कृपया खाली मतदान करा.',
	'ajaxpoll-no-vote-results-after-voting' => 'कृपया खाली मतदान करा.आपण मत दिल्यावर निकाल दाखविल्या जातील.',
	'ajaxpoll-info' => '$2 वर मतदान सुरू केल्यापासून {{PLURAL:$1|एक मत होते|$1 मते होती}}',
	'ajaxpoll-submitting' => 'कृपया थांबा. आपले मत सादर करीत आहे.',
	'ajaxpoll-vote-permission' => 'आपण मतदानास अपात्र आहात.',
	'ajaxpoll-view-results-permission' => 'या मतदानाचे निकाल पाहण्यास आपण अपात्र आहात.',
	'ajaxpoll-view-results-before-vote-permission' => 'आपण मतदान केल्याशिवाय या मतदानाचे निकाल पाहण्यास आपण अपात्र आहात.',
	'ajaxpoll-revoke-vote' => 'मला माझे मतदान रद्द करावयाचे आहे.',
	'ajaxpoll-vote-revoked' => 'आपले मतदान रद्द करण्यात आले आहे.',
	'ajaxpoll-error-csrf-wrong-token' => 'चुकिचे टोकन मिळाल्यामुळे आपले मत दुर्लक्षित केल्या गेले आहे.',
	'right-ajaxpoll-vote' => 'AJAX-आधारीत निवडणुकांमध्ये मतदान करू शकता',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Tedbundyjr
 */
$messages['ms'] = array(
	'ajaxpoll-desc' => 'Membolehkan tinjauan berasaskan AJAX dengan teg <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Halaman dengan tinjauan',
	'ajaxpoll-vote-update' => 'Undian anda telah dikemaskinikan.',
	'ajaxpoll-vote-add' => 'Undian anda telah ditambahkan.',
	'ajaxpoll-vote-error' => 'Ada masalah dengan pemprosesan undian anda, sila cuba lagi.',
	'ajaxpoll-percent-votes' => '$1% daripada semua undian',
	'ajaxpoll-your-vote' => 'Anda sudah mengundi "$1" pada $2, tetapi anda boleh mengubah undian anda dengan mengklik jawapan di bawah.',
	'ajaxpoll-no-vote' => 'Sila undi di bawah.',
	'ajaxpoll-no-vote-results-after-voting' => 'Sila undi di bawah. Hasil pengundian akan dipaparkan setelah anda mengundi.',
	'ajaxpoll-info' => 'Tinjauan ini menerima {{PLURAL:$1|satu|$1}} undian semenjak dibuka pada $2.',
	'ajaxpoll-submitting' => 'Sila tunggu, undian anda sedang diserahkan.',
	'ajaxpoll-vote-permission' => 'Anda tidak diberi hak untuk mengundi.',
	'ajaxpoll-view-results-permission' => 'Anda tidak diberi izin untuk melihat hasil pengundian tinjauan pada ini.',
	'ajaxpoll-view-results-before-vote-permission' => 'Anda tidak diberi izin untuk melihat hasil pengundian tinjauan pada ini sebelum anda mengundi.',
	'ajaxpoll-revoke-vote' => 'Saya ingin menarik balik undian saya',
	'ajaxpoll-vote-revoked' => 'Undi anda telah dibatalkan.',
	'ajaxpoll-error-csrf-wrong-token' => 'Token yang salah diterima, maka undian anda terpaksa diketepikan.',
	'right-ajaxpoll-vote' => 'Boleh mengundi dalam tinjauan berasaskan AJAX',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'ajaxpoll-vote-update' => 'Il-vot tiegħek ġie aġġornat.',
	'ajaxpoll-vote-add' => 'Il-vot tiegħek ġie miżjud.',
	'ajaxpoll-vote-error' => "Kien hemm problema fl-ipproċessar tal-vot tiegħek, jekk jogħġbok erġa' pprova.",
	'ajaxpoll-percent-votes' => '$1% tal-voti kollha',
	'ajaxpoll-your-vote' => 'Inti diġà vvutajt għal "$1" nhar il-$2, tista\' tbiddel il-vot tiegħek billi tagħżel risposta hawn taħt.',
	'ajaxpoll-no-vote' => 'Jekk jogħġbok ivvota hawn taħt.',
	'ajaxpoll-info' => 'Kien hemm {{PLURAL:$1|vot wieħed|$1 voti}} minn mindu dan is-sondaġġ ġie maħluq nhar il-$2.',
	'ajaxpoll-submitting' => 'Jekk jogħġbok stenna, il-vot tiegħek qiegħed jintbagħat.',
	'ajaxpoll-vote-permission' => "M'għandekx id-dritt tal-vot.",
	'ajaxpoll-revoke-vote' => 'Nixtieq nirrevoka l-vot tiegħi',
	'ajaxpoll-vote-revoked' => "Irnexxielek tirrevoka b'suċċess il-vot tiegħek.", # Fuzzy
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Cocu
 * @author Danmichaelo
 * @author Nghtwlkr
 * @author Simen47
 */
$messages['nb'] = array(
	'ajaxpoll-tracking-category' => 'Sider med en avstemning',
	'ajaxpoll-vote-update' => 'Din stemme har blitt oppdatert.',
	'ajaxpoll-vote-add' => 'Din stemme har blitt lagt til.',
	'ajaxpoll-vote-error' => 'Det oppstod et problem med behandlingen av din stemme, vennligst prøv igjen.',
	'ajaxpoll-percent-votes' => '$1% av alle stemmer',
	'ajaxpoll-your-vote' => 'Du har allerede stemt på «$1» den $2, du kan endre din stemme ved å klikke på et svar nedenfor.',
	'ajaxpoll-no-vote' => 'Vennligst stem nedenfor.',
	'ajaxpoll-no-vote-results-after-voting' => 'Vennligst stem under. Resultatene vil bli vist når du har stemt.',
	'ajaxpoll-info' => 'Det var {{PLURAL:$1|en stemme|$1 stemmer}} siden spørreundersøkelsen ble opprettet den $2.',
	'ajaxpoll-submitting' => 'Vennligst vent, sender inn stemmen din.',
	'ajaxpoll-vote-permission' => 'Du har ikke rettigheter til å stemme.',
	'ajaxpoll-view-results-permission' => 'Du har ikke rettigheter til å vise resultatene i denne avstemningen.',
	'ajaxpoll-view-results-before-vote-permission' => 'Du har ikke rettigheter til å vise resultatene av denne avstemningen før du har stemt.',
	'ajaxpoll-revoke-vote' => 'Jeg vil trekke tilbake stemmen min',
	'ajaxpoll-vote-revoked' => 'Du har trukket tilbake stemmen din.', # Fuzzy
	'ajaxpoll-error-csrf-wrong-token' => 'En feilaktig token ble mottatt, og din stemme er ignorert.',
	'right-ajaxpoll-vote' => 'Kan stemme i AJAX-baserte avstemninger',
	'right-ajaxpoll-view-results' => 'Kan se resultater i AJAX-baserte avstemninger',
	'right-ajaxpoll-view-results-before-vote' => 'Kan se resultater i AJAX-baserte avstemninger før stemme er avgitt',
	'action-ajaxpoll-vote' => 'stem i AJAX-baserte avstemninger',
	'action-ajaxpoll-view-results' => 'se resultater i AJAX-baserte avstemninger',
	'action-ajaxpoll-view-results-before-vote' => 'se resultater i AJAX-baserte avstemninger før avstemming',
);

/** Dutch (Nederlands)
 * @author AvatarTeam
 * @author Breghtje
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'ajaxpoll-desc' => 'Maakt AJAX-gebaseerde polls mogelijk met de tag <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => "Pagina's met een peiling",
	'ajaxpoll-vote-update' => 'Uw stem is bijgewerkt.',
	'ajaxpoll-vote-add' => 'Uw stem is toegevoegd.',
	'ajaxpoll-vote-error' => 'Er is een probleem opgetreden tijdens het verwerken van uw stem. Probeer het opnieuw.',
	'ajaxpoll-percent-votes' => '$1% van alle stemmen',
	'ajaxpoll-your-vote' => 'U hebt al voor "$1" gestemd op $2. U kunt uw stem wijzigen door hieronder op een antwoord te klikken.',
	'ajaxpoll-no-vote' => 'Stem hieronder.',
	'ajaxpoll-no-vote-results-after-voting' => 'Stem hieronder. De resultaten worden weergegeven nadat u hebt gestemd.',
	'ajaxpoll-info' => 'Er {{PLURAL:$1|is één stem|zijn $1 stemmen}} uitgebracht sinds de peiling op $2 is aangemaakt.',
	'ajaxpoll-submitting' => 'Een ogenblik geduld. Uw stem wordt opgeslagen...',
	'ajaxpoll-vote-permission' => 'U kunt niet stemmen.',
	'ajaxpoll-view-results-permission' => 'U mag de resultaten van deze peiling niet bekijken.',
	'ajaxpoll-view-results-before-vote-permission' => 'U mag de resultaten van deze peiling niet bekijken voordat u hebt gestemd.',
	'ajaxpoll-revoke-vote' => 'Ik wil mijn stem intrekken',
	'ajaxpoll-vote-revoked' => 'Uw stem is ingetrokken.',
	'ajaxpoll-error-csrf-wrong-token' => 'Er is een ongeldig token ontvangen en uw stem wordt genegeerd.',
	'right-ajaxpoll-vote' => 'Kan in AJAX-gebaseerde peilingen stemmen',
	'right-ajaxpoll-view-results' => 'Kan de resultaten weergeven in AJAX-gebaseerde peilingen',
	'right-ajaxpoll-view-results-before-vote' => 'Kan resultaten bekijken in AJAX-gebaseerde peilingen alvorens gestemd te hebben',
	'action-ajaxpoll-vote' => 'in AJAX-gebaseerde peilingen te stemmen',
	'action-ajaxpoll-view-results' => 'resultaten in AJAX-gebaseerde peilingen weer te geven',
	'action-ajaxpoll-view-results-before-vote' => 'resultaten in AJAX-gebaseerde peilingen weer te geven voordat u heeft gestemd',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'ajaxpoll-vote-update' => 'Je stem is bijgewerkt.',
	'ajaxpoll-vote-add' => 'Je stem is toegevoegd.',
	'ajaxpoll-vote-error' => 'Er is een probleem opgetreden tijdens het verwerken van je stem. Probeer het opnieuw.',
	'ajaxpoll-your-vote' => 'Je hebt al voor "$1" gestemd op $2. Je kunt je stem wijzigen door hieronder op een antwoord te klikken.',
	'ajaxpoll-submitting' => 'Een ogenblik geduld. Je stem wordt opgeslagen...',
	'ajaxpoll-vote-permission' => 'Je kunt niet stemmen.',
	'ajaxpoll-vote-revoked' => 'Je stem is ingetrokken.', # Fuzzy
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'ajaxpoll-desc' => 'Autoriza las interrogacions basadas sus AJAX amb <tt>&lt;poll&gt;</tt> tag',
	'ajaxpoll-tracking-category' => 'Paginas amb un sondatge',
	'ajaxpoll-vote-update' => 'Vòstre vòte es estat mes a jorn.',
	'ajaxpoll-vote-add' => 'Vòstre vòte es estat comptat.',
	'ajaxpoll-vote-error' => "Una error s'es producha amb lo tractament de vòstre vòte, ensajatz tornarmai.",
	'ajaxpoll-percent-votes' => '$1% de totes los vòtes',
	'ajaxpoll-your-vote' => 'Avètz votat per « $1 » sus $2. Podètz cambiar de vòte se clicatz sus una de las causidas mai bas.',
	'ajaxpoll-no-vote' => 'Mercé de votar çaijós.',
	'ajaxpoll-no-vote-results-after-voting' => 'Podètz votar çaijós. Los resultats seràn afichats quand auretz votat.',
	'ajaxpoll-info' => 'I aviá {{PLURAL:$1|un vòte|$1 vòtes}} dempuèi l’elaboracion del sondatge al $2.',
	'ajaxpoll-submitting' => 'Pacientatz pendent lo mandadís de vòstre vòte...',
	'ajaxpoll-vote-permission' => 'Podètz pas votar.',
	'ajaxpoll-view-results-permission' => "Sètz pas autorizat a veire los resultats d'aqueste sondatge.",
	'ajaxpoll-view-results-before-vote-permission' => "Sètz pas autorizat a veire los resultats d'aqueste sondatge abans d'aver votat.",
	'ajaxpoll-revoke-vote' => 'Vòli anullar mon vòte',
	'ajaxpoll-vote-revoked' => 'Vòstre vòte es estat revocat.',
	'ajaxpoll-error-csrf-wrong-token' => 'Un geton incorrècte es estat recebut, e vòstre vòte es ignorat.',
	'right-ajaxpoll-vote' => 'Pòt votar dins de sondatges basats sus AJAX',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author ଆଶୁତୋଷ କର
 */
$messages['or'] = array(
	'ajaxpoll-tracking-category' => 'ମତଦାନ ଯୁକ୍ତ ପ୍ରୁଷ୍ଠା।',
	'ajaxpoll-vote-update' => 'ଆପଣଙ୍କ ମତ ଅପଡେଟ କରାଯାଇଛି।',
	'ajaxpoll-vote-add' => 'ଆପଣଙ୍କ ମତଟି ଯୋଡାଗଲା।',
	'ajaxpoll-percent-votes' => 'ସବୁ ଭୋଟର $1%',
	'ajaxpoll-no-vote' => 'ତଳେ ମତଦାନ କରନ୍ତୁ।',
	'ajaxpoll-submitting' => 'ମତ ଦେବାପାଇଁ ଦୟାକରି ଅପେକ୍ଷା କରନ୍ତୁ।',
	'ajaxpoll-vote-permission' => 'ଆପଣ ମତ ଦେବାପାଇଁ ହକଦାର ନୁହନ୍ତି।',
	'ajaxpoll-revoke-vote' => 'ମୁଁ ମୋ ମତ ଫେରାଇନେବାକୁ ଚାହୁଁଛି।',
	'ajaxpoll-vote-revoked' => 'ଆପଣ ମତ ଫେରାଇନେଲେ।', # Fuzzy
	'right-ajaxpoll-vote' => 'ଆଜାକ୍ସ ଆଧାରିତ ମତଦାନରେ ମତ ଦେଇପାରିବେ',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Chrumps
 * @author Dariusz Siedlecki
 */
$messages['pl'] = array(
	'ajaxpoll-desc' => 'Umożliwia wstawienie opartych na technologii AJAX ankiet przy pomocy znacznika <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Strony z głosowaniami',
	'ajaxpoll-vote-update' => 'Twój głos został zmieniony.',
	'ajaxpoll-vote-add' => 'Twój głos został dodany.',
	'ajaxpoll-vote-error' => 'Wystąpił błąd w czasie dodawania głosu, proszę spróbować później.',
	'ajaxpoll-percent-votes' => '$1% wszystkich głosów',
	'ajaxpoll-your-vote' => 'Zagłosowałeś już na "$1" $2, możesz zmienić swój głos klikając na inną odpowiedź poniżej.',
	'ajaxpoll-no-vote' => 'Zagłosuj poniżej.',
	'ajaxpoll-no-vote-results-after-voting' => 'Zagłosuj poniżej. Wyniki zobaczysz po oddaniu głosu.',
	'ajaxpoll-info' => 'Oddano już {{PLURAL:$1|jeden głos|$1 głosy|$1 głosów}} od utworzenia głosowania $2.',
	'ajaxpoll-submitting' => 'Proszę czekać, trwa dodawanie głosu.',
	'ajaxpoll-vote-permission' => 'Nie masz uprawnień do głosowania.',
	'ajaxpoll-view-results-permission' => 'Nie masz uprawnień, aby zobaczyć wyniki tego głosowania.',
	'ajaxpoll-view-results-before-vote-permission' => 'Nie masz uprawnień, aby zobaczyć wyniki tego głosowania zanim nie zagłosujesz.',
	'ajaxpoll-revoke-vote' => 'Chcę wycofać swój głos',
	'ajaxpoll-vote-revoked' => 'Twój głos został odwołany.',
	'ajaxpoll-error-csrf-wrong-token' => 'Odebrano błędny token, a Twój głos został zignorowany.',
	'right-ajaxpoll-vote' => 'Można głosować w sondażach opartych na technologii AJAX',
	'right-ajaxpoll-view-results' => 'Można przejrzeć wyniki ankiet opartych na AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Można przejrzeć wyniki ankiet opartych na AJAX przed głosowaniem',
	'action-ajaxpoll-vote' => 'głosowanie w ankietach opartych na AJAX',
	'action-ajaxpoll-view-results' => 'zobacz wyniki ankiety opartej na AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'przeglądanie wyników ankiet opartych na AJAX przed głosowaniem',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'ajaxpoll-desc' => "A përmët j'anterogassion basà su AJAX con tichëtta <tt>&lt;poll&gt;</tt>",
	'ajaxpoll-tracking-category' => 'Pagine con un sondagi',
	'ajaxpoll-vote-update' => "Tò vot a l'é stàit modificà.",
	'ajaxpoll-vote-add' => "Tò vot a l'é stàit giontà.",
	'ajaxpoll-vote-error' => "A l'é staje un problema an tratand sò vot, për piasì ch'a preuva torna.",
	'ajaxpoll-percent-votes' => '$1% ëd tùit ij vot',
	'ajaxpoll-your-vote' => 'A l\'ha già votà për "$1" su $2; a peul cangé sò vot an sgnacand su na rispòsta sì-sota.',
	'ajaxpoll-no-vote' => 'Për piasì, voté sì-sota.',
	'ajaxpoll-info' => "A {{PLURAL:$1|l'é staje un vot|son staje $1 vot}} da quand ël sondagi a l'é stàit creà su $2.",
	'ajaxpoll-submitting' => "Për piasì ch'a speta, sò vot a l'é an camin ch'a riva.",
	'ajaxpoll-vote-permission' => 'It ses pa titolà për voté.',
	'ajaxpoll-revoke-vote' => 'I veuj revoché mè vot',
	'ajaxpoll-vote-revoked' => "It l'has revocà da bin tò vot.", # Fuzzy
	'right-ajaxpoll-vote' => 'A peul voté ant ij sondagi basà dzora a AJAX',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'ajaxpoll-vote-add' => 'ستاسې رايه ورگډه شوه.',
	'ajaxpoll-percent-votes' => '$1% د ټولو رايو څخه',
);

/** Portuguese (português)
 * @author Cainamarques
 * @author Hamilton Abreu
 * @author Malafaya
 * @author SandroHc
 */
$messages['pt'] = array(
	'ajaxpoll-desc' => "Permite realizar votações baseadas em AJAX usando a ''tag'' <tt>&lt;poll&gt;</tt>",
	'ajaxpoll-tracking-category' => 'Páginas com votação',
	'ajaxpoll-vote-update' => 'O seu voto foi atualizado.',
	'ajaxpoll-vote-add' => 'O seu voto foi adicionado.',
	'ajaxpoll-vote-error' => 'Ocorreu um erro ao processar o seu voto. Tente novamente, por favor.',
	'ajaxpoll-percent-votes' => '$1% do total de votos',
	'ajaxpoll-your-vote' => 'Já votou em "$1" a $2. Pode alterar o seu voto se escolher outra resposta abaixo.',
	'ajaxpoll-no-vote' => 'Vote abaixo, por favor.',
	'ajaxpoll-no-vote-results-after-voting' => 'Vote abaixo, por favor. Os resultados serão mostrados depois de votar.',
	'ajaxpoll-info' => '{{PLURAL:$1|Um voto|$1 votos}} desde a criação da votação em $2.',
	'ajaxpoll-submitting' => 'Aguarde, por favor. A enviar o seu voto.',
	'ajaxpoll-vote-permission' => 'Não tem o direito de votar.',
	'ajaxpoll-view-results-permission' => 'Não pode ver os resultados desta votação.',
	'ajaxpoll-view-results-before-vote-permission' => 'Não pode ver os resultados desta votação antes de votar.',
	'ajaxpoll-revoke-vote' => 'Quero revogar o meu voto',
	'ajaxpoll-vote-revoked' => 'O seu voto foi revogado.',
	'ajaxpoll-error-csrf-wrong-token' => 'Foi recebida uma chave errada e o seu voto foi ignorado.',
	'right-ajaxpoll-vote' => 'Pode votar em votações baseadas em AJAX',
	'right-ajaxpoll-view-results' => 'Pode ver os resultados das votações baseadas em AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Pode ver os resultados das votações baseadas em AJAX antes de votar',
	'action-ajaxpoll-vote' => 'votar nas votações baseadas em AJAX',
	'action-ajaxpoll-view-results' => 'ver os resultados das votações baseadas em AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'ver os resultados das votações baseadas em AJAX antes de votar',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Amgauna
 * @author Anaclaudiaml
 * @author Cainamarques
 * @author Daemorris
 * @author Fúlvio
 */
$messages['pt-br'] = array(
	'ajaxpoll-desc' => 'Permite votações baseadas em AJAX usando a etiqueta <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Páginas com votação',
	'ajaxpoll-vote-update' => 'Seu voto foi atualizado.',
	'ajaxpoll-vote-add' => 'Seu voto foi adicionado.',
	'ajaxpoll-vote-error' => 'Houve um problema com o processamento de seu voto, por favor tente novamente.',
	'ajaxpoll-percent-votes' => '$1% de todos votos',
	'ajaxpoll-your-vote' => 'Você já votou para "$1" em $2, você pode alterar seu voto escolhendo outra opção abaixo.',
	'ajaxpoll-no-vote' => 'Por favor vote abaixo.',
	'ajaxpoll-no-vote-results-after-voting' => 'Por favor vote abaixo. Os resultados serão mostrados quando tiver votado.',
	'ajaxpoll-info' => '{{PLURAL:$1|Um voto|$1 votos}} desde a criação da votação em $2.',
	'ajaxpoll-submitting' => 'Por favor aguarde, enviando seu voto.',
	'ajaxpoll-vote-permission' => 'Você não está habilitado a votar.',
	'ajaxpoll-view-results-permission' => 'Você não está habilitado a ver os resultados desta votação.',
	'ajaxpoll-view-results-before-vote-permission' => 'Você não está habilitado a ver os resultados desta votação antes de ter votado.',
	'ajaxpoll-revoke-vote' => 'Quero revogar o meu voto',
	'ajaxpoll-vote-revoked' => 'Seu voto foi revogado.',
	'ajaxpoll-error-csrf-wrong-token' => "Um ''token'' errado foi recebido e o seu voto foi ignorado.",
	'right-ajaxpoll-vote' => 'Pode votar em votações baseadas em AJAX',
	'right-ajaxpoll-view-results' => 'Pode-se vêr resultados das pesquisas baseadas em AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Pode-se vêr resultados de pesquisas baseadas em AJAX antes de ter votado',
	'action-ajaxpoll-vote' => 'Vote em pesquisas baseadas em AJAX',
	'action-ajaxpoll-view-results' => 'Veja os resultados de pequisas baseadas em AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'Veja os resultados das pesquisas baseadas em AJAX antes de ter votado',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'ajaxpoll-tracking-category' => 'Pagini cu chestionar',
	'ajaxpoll-vote-update' => 'Votul dumneavoastră a fost actualizat.',
	'ajaxpoll-vote-add' => 'Votul dumneavoastră a fost adăugat.',
	'ajaxpoll-vote-error' => 'A apărut o problemă la procesarea votului dumneavoastră. Vă rugăm să încercați din nou.',
	'ajaxpoll-percent-votes' => '$1% din toate voturile',
	'ajaxpoll-no-vote' => 'Vă rugăm să votați mai jos.',
	'ajaxpoll-submitting' => 'Vă rugăm să așteptați, votul dumneavoastră se trimite.',
	'ajaxpoll-vote-permission' => 'Nu aveți drept de vot.',
	'ajaxpoll-revoke-vote' => 'Vreau să anulez votul meu',
	'ajaxpoll-vote-revoked' => 'Votul dumneavoastră a fost anulat.',
	'right-ajaxpoll-vote' => 'Puteți vota în chestionare bazate pe AJAX',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'ajaxpoll-desc' => "Oermette sondagge basate sus a AJAX cu 'u tag <tt>&lt;poll&gt;</tt>",
	'ajaxpoll-tracking-category' => "Pàgene cu 'nu sondagge",
	'ajaxpoll-vote-update' => "'U vote tune ha state aggiornate.",
	'ajaxpoll-vote-add' => "'U vote tune ha state aggiunde.",
	'ajaxpoll-vote-error' => "Stave 'nu probbleme cu l'elabborazione d'u vote tune, pe piacere pruève arrète.",
	'ajaxpoll-percent-votes' => '$1% de totte le vote',
	'ajaxpoll-your-vote' => 'Tu è ggià vutate pe "$1" \'u $2, tu puè cangià \'u vote tune cazzanne \'a resposte aqquà sotte.',
	'ajaxpoll-no-vote' => "Pe' piacere, vote d'abbasce",
	'ajaxpoll-no-vote-results-after-voting' => 'Pe piacere vote aqquà sotte. Le resultate avènene fatte vedè quanne tu è vutate.',
	'ajaxpoll-info' => "{{PLURAL:$1|Stè 'nu vote|Stonne $1 vote}} da quanne 'u sondagge ha state ccrejate 'u $2.",
	'ajaxpoll-submitting' => "Pe piacere aspitte, stoche a elabbore 'u vote tune.",
	'ajaxpoll-vote-permission' => 'Tu non ge puè votà',
	'ajaxpoll-view-results-permission' => "Non ge puè 'ndrucà le resultate de stu sondagge.",
	'ajaxpoll-view-results-before-vote-permission' => "Non ge puè 'ndrucà le resultate de stu sondagge apprime ca è vutate.",
	'ajaxpoll-revoke-vote' => "Ije vogghie annullà 'u vote mije",
	'ajaxpoll-vote-revoked' => "'U vote tune ha state revocate.",
	'ajaxpoll-error-csrf-wrong-token' => "'Nu gettone sbagliate ha state ricevute, e 'u vote tune ha state cacate.",
	'right-ajaxpoll-vote' => 'Puè vutà le sondagge in AJAX',
	'right-ajaxpoll-view-results' => "Puè 'ndrucà le resultate de le sondagge fatte cu AJAX",
);

/** Russian (русский)
 * @author DCamer
 * @author Iluvatar
 * @author KPu3uC B Poccuu
 * @author Kaganer
 * @author Lockal
 * @author Okras
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'ajaxpoll-desc' => 'Позволяет проводить голосования на основе AJAX с помощью тега <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Страницы с опросами',
	'ajaxpoll-vote-update' => 'Ваш голос обновлён.',
	'ajaxpoll-vote-add' => 'Ваш голос добавлен.',
	'ajaxpoll-vote-error' => 'Возникла проблема с обработкой вашего голоса, пожалуйста, попробуйте ещё раз.',
	'ajaxpoll-percent-votes' => '$1% от всех голосов',
	'ajaxpoll-your-vote' => 'Вы уже проголосовали «$1» $2. Вы можете изменить свой выбор, нажав на один из представленных ниже ответов.',
	'ajaxpoll-no-vote' => 'Пожалуйста, проголосуйте ниже.',
	'ajaxpoll-no-vote-results-after-voting' => 'Проголосуйте, пожалуйста, ниже. Результаты будут показаны после того, как вы проголосуете.',
	'ajaxpoll-info' => 'С момента создания голосования $2 {{PLURAL:$1|поступил $1 голос|поступило $1 голосов|поступили $1 голоса}}.',
	'ajaxpoll-submitting' => 'Пожалуйста, подождите, ваш голос обрабатывается.',
	'ajaxpoll-vote-permission' => 'Вы не можете голосовать.',
	'ajaxpoll-view-results-permission' => 'Вы не можете просматривать результаты этого опроса.',
	'ajaxpoll-view-results-before-vote-permission' => 'Вы не можете просмотреть результаты опроса до тех пор, пока не проголосуете.',
	'ajaxpoll-revoke-vote' => 'Я хочу отменить свой голос',
	'ajaxpoll-vote-revoked' => 'Ваш голос был отозван.',
	'ajaxpoll-error-csrf-wrong-token' => 'Был получен неверный токен, ваш голос не учитывается.',
	'right-ajaxpoll-vote' => 'Может голосовать в опросах на основе AJAX',
	'right-ajaxpoll-view-results' => 'Можно посмотреть результаты опросов на основе AJAX',
	'right-ajaxpoll-view-results-before-vote' => 'Можно посмотреть результаты опросов на основе AJAX перед голосованием',
	'action-ajaxpoll-vote' => 'голосование в опросах на основе AJAX',
	'action-ajaxpoll-view-results' => 'просмотр результатов опросов на основе AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'просмотр результатов опросов на основе AJAX перед голосованием',
);

/** Scots (Scots)
 * @author John Reid
 */
$messages['sco'] = array(
	'ajaxpoll-desc' => 'Permits AJAX-based polls wi <tt>&lt;poll&gt;</tt> tag',
	'ajaxpoll-tracking-category' => 'Pages wi ae poll',
	'ajaxpoll-vote-update' => 'Yer vote haes been updated.',
	'ajaxpoll-vote-add' => 'Yer vote haes been added.',
	'ajaxpoll-vote-error' => 'Thaur wis ae problem wi processing yer vote, please try again.',
	'ajaxpoll-percent-votes' => '$1% o aw votes',
	'ajaxpoll-your-vote' => 'Ye voted fer "$1" oan $2. Ye can chynge yer vote bi clapin ae different answer ablow.',
	'ajaxpoll-no-vote' => 'Please vote ablow.',
	'ajaxpoll-no-vote-results-after-voting' => "Please vote ablow. Results will be shawn whan ye'v voted.",
	'ajaxpoll-info' => 'Thaur {{PLURAL:$1|wis yin vote|were $1 votes}} sin the poll wis cræftit oan $2.',
	'ajaxpoll-submitting' => 'Please wait, haunin in yer vote.',
	'ajaxpoll-vote-permission' => "Ye'r na permitit tae vote.",
	'ajaxpoll-view-results-permission' => "Ye'r naw permittit tae see the ootcomes o this poll.",
	'ajaxpoll-view-results-before-vote-permission' => "Ye'r no permited tae view results o this poll afore ye'v voted.",
	'ajaxpoll-revoke-vote' => 'I wish tae revoke ma vote',
	'ajaxpoll-vote-revoked' => 'Yer vote haes been revoked.',
	'ajaxpoll-error-csrf-wrong-token' => 'Ae wrang token wis receeved, n yer vote is ignored.',
	'right-ajaxpoll-vote' => 'Can vote in AJAX-based polls',
	'right-ajaxpoll-view-results' => 'Can view results in AJAX-based polls',
	'right-ajaxpoll-view-results-before-vote' => 'Can view results in AJAX-based polls afore votein',
	'action-ajaxpoll-vote' => 'vote in AJAX-based polls',
	'action-ajaxpoll-view-results' => 'view results in AJAX-based polls',
	'action-ajaxpoll-view-results-before-vote' => 'view results in AJAX-based polls afore votein',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'ajaxpoll-tracking-category' => 'ඡන්ද විමසීමක් සහිත පිටු',
	'ajaxpoll-vote-update' => 'ඔබේ මනාපය යාවත්කාලීන කරන ලදී.',
	'ajaxpoll-vote-add' => 'ඔබේ මනාපය එක් කරන ලදී.',
	'ajaxpoll-percent-votes' => 'සියලුම මනාපයන්ගෙන් $1% ක්',
	'ajaxpoll-no-vote' => 'කරුණාකර පහතින් මනාපය දෙන්න.',
	'ajaxpoll-submitting' => 'කරුණාකර රැදී සිටින්න, ඔබේ මනාපය යොමු කරමින්.',
	'ajaxpoll-vote-permission' => 'ඔබ මනාප ලබා දීමට සුදුසුකම් ලබා නොමැත.',
	'ajaxpoll-revoke-vote' => 'මට මගේ මනාපය අස් කර ගන්න අවශ්‍යයි',
	'ajaxpoll-vote-revoked' => 'මට විසින් ඔබේ මනාපය සාර්ථකව අස් කර ගන්නා ලදී.', # Fuzzy
	'right-ajaxpoll-vote' => 'AJAX-පාදක ඡන්ද විමසීම් හී මානාපය දිය හැක',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Verlor
 */
$messages['sr-ec'] = array(
	'ajaxpoll-vote-update' => 'аш глас је био урачунат.',
	'ajaxpoll-vote-add' => 'Ваш галс је додан',
	'ajaxpoll-percent-votes' => '$1% од свих гласова',
	'ajaxpoll-no-vote' => 'Молимо гласајте испод.',
	'ajaxpoll-submitting' => 'Чекајте, шаљемо ваш глас.',
	'ajaxpoll-vote-permission' => 'Не можете да гласате.',
	'ajaxpoll-revoke-vote' => 'Желим да повучем глас',
	'ajaxpoll-vote-revoked' => 'Ваш глас је поништен.',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'ajaxpoll-vote-update' => 'aš glas je bio uračunat.',
	'ajaxpoll-vote-add' => 'Vaš gals je dodan',
	'ajaxpoll-percent-votes' => '$1% od svih glasova',
	'ajaxpoll-no-vote' => 'Molimo glasajte ispod.',
	'ajaxpoll-submitting' => 'Čekajte, šaljemo vaš glas.',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Liftarn
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'ajaxpoll-desc' => 'Gör AJAX-baserade omröstningar med <tt>&lt;poll&gt;</tt>-tagg',
	'ajaxpoll-tracking-category' => 'Sidor med en omröstning',
	'ajaxpoll-vote-update' => 'Din röst har uppdaterats.',
	'ajaxpoll-vote-add' => 'Din röst har lagts till.',
	'ajaxpoll-vote-error' => 'Det uppstod ett problem med bearbetningen av din röst, var god försök igen.',
	'ajaxpoll-percent-votes' => '$1% av alla röster',
	'ajaxpoll-your-vote' => 'Du har redan röstat på "$1" den $2, du kan ändra din röst genom att klicka på ett svar nedan.',
	'ajaxpoll-no-vote' => 'Var god rösta nedan.',
	'ajaxpoll-no-vote-results-after-voting' => 'Rösta nedan. Resultaten kommer att visas när du har röstat.',
	'ajaxpoll-info' => 'Det var {{PLURAL:$1|en röst|$1 röster}} sedan omröstningen skapades den $2.',
	'ajaxpoll-submitting' => 'Var god vänta, skickar in din röst.',
	'ajaxpoll-vote-permission' => 'Du är inte berättigad att rösta.',
	'ajaxpoll-view-results-permission' => 'Du har inte rätt att se resultat från denna enkät.',
	'ajaxpoll-view-results-before-vote-permission' => 'Du har inte rätt att se resultat från denna enkät innan du har röstat.',
	'ajaxpoll-revoke-vote' => 'Jag vill återkalla min röst',
	'ajaxpoll-vote-revoked' => 'Din röst har återkallats.',
	'ajaxpoll-error-csrf-wrong-token' => 'En felaktig token mottogs och din röst ignoreras.',
	'right-ajaxpoll-vote' => 'Kan rösta i AJAX-baserade omröstningar',
	'right-ajaxpoll-view-results' => 'Kan visa resultaten i AJAX-baserade omröstningar',
	'right-ajaxpoll-view-results-before-vote' => 'Kan visa resultaten i AJAX-baserade omröstningar innan de har röstat',
	'action-ajaxpoll-vote' => 'rösta i AJAX-baserade omröstningar',
	'action-ajaxpoll-view-results' => 'visa resultat i AJAX-baserade enkäter',
	'action-ajaxpoll-view-results-before-vote' => 'visa resultat i AJAX-baserade enkäter innan de har röstat',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'ajaxpoll-vote-update' => 'Kura yako imesasishwa.',
	'ajaxpoll-vote-add' => 'Kura yako imeongezwa.',
	'ajaxpoll-vote-error' => 'Kulikuwa na hitilafu katika mchakato wa kura yako, tafadhali jaribu tena.',
	'ajaxpoll-percent-votes' => 'Asilimia $1 ya kura zote',
	'ajaxpoll-no-vote' => 'Tafadhali piga kura hapa chini.',
	'ajaxpoll-submitting' => 'Tafadhali ngoja, inawasilisha kura yako.',
	'ajaxpoll-vote-permission' => 'Hauna haki ya kupiga kura.',
	'ajaxpoll-revoke-vote' => 'Nataka kubatilisha kura yangu',
	'ajaxpoll-vote-revoked' => 'Umefanikiwa kubatilisha kura yako.', # Fuzzy
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'ajaxpoll-tracking-category' => 'வாக்கெடுப்புடன் கூடிய பக்கங்கள்',
	'ajaxpoll-vote-update' => 'உங்கள் வாக்கு இற்றைப்படுத்தப்பட்டது.',
	'ajaxpoll-vote-add' => 'உங்கள் வாக்கு சேர்த்துக் கொள்ளப்பட்டது.',
	'ajaxpoll-vote-error' => 'உங்கள் வாக்கைச் செயற்படுத்துவதில் ஒரு சிக்கல் ஏற்பட்டது.
அருள்கூர்ந்து மீண்டும் முயற்சிக்கவும்.',
	'ajaxpoll-percent-votes' => 'எல்லா வாக்குகளினதும் $1%',
	'ajaxpoll-no-vote' => 'தயவுசெய்து கீழே வாக்களிக்கவும்.',
	'ajaxpoll-submitting' => 'தயவுசெய்து காத்திருக்கவும், உங்கள் வாக்கு சமர்ப்பிக்கப்படுகிறது.',
	'ajaxpoll-vote-permission' => 'உங்களுக்கு வாக்களிக்கும் உரிமை இல்லை.',
	'ajaxpoll-revoke-vote' => 'நான் எனது வாக்கைத் திரும்பப் பெற விரும்புகிறேன்.',
	'ajaxpoll-vote-revoked' => 'நீங்கள் உங்கள் வாக்கினை வெற்றிகரமாக திரும்பப் பெற்றுள்ளீர்கள்.', # Fuzzy
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Ravichandra
 */
$messages['te'] = array(
	'ajaxpoll-desc' => 'అజాక్స్ ఆధారిత పోల్స్ <tt>&lt;poll&gt;</tt> ట్యాగుతో అనుమతించు',
	'ajaxpoll-tracking-category' => 'పోల్ కలిగిన పేజీలు',
	'ajaxpoll-vote-update' => 'మీ వోటును తాజాకరించాం.',
	'ajaxpoll-vote-add' => 'మీ వోటును చేర్చాం.',
	'ajaxpoll-vote-error' => 'మీ వోటును ప్రాసెస్ చెయ్యడంలో సమస్య ఎదురైంది. మళ్ళీ ప్రయత్నించండి.',
	'ajaxpoll-percent-votes' => 'మొత్తం వోట్లలో $1%',
	'ajaxpoll-your-vote' => 'మీరు $2 వద్ద "$1" కు వోటేసారు. కింది వాటినుండి వేరే జవాబును ఎంచుకుని మీ వోటును మార్చుకోవచ్చు.',
	'ajaxpoll-no-vote' => 'కింద మీ వోటు వెయ్యండి.',
	'ajaxpoll-no-vote-results-after-voting' => 'కింద మీ వోటు వెయ్యండి. వోటేసాక, ఫలితాలు చూపిస్తాం.',
	'ajaxpoll-info' => '$2 కు పోల్ ను సృష్టించాక, {{PLURAL:$1|ఒక్క వోటు పోలైంది|$1 వోట్లు పోలయ్యాయి}}.',
	'ajaxpoll-submitting' => 'ఒక్క క్షణం.. మీ వోటును సమర్పిస్తున్నాం.',
	'ajaxpoll-vote-permission' => 'మీకు వోటేసే అనుమతి లేదు.',
	'ajaxpoll-view-results-permission' => 'ఈ పోల్ ఫలితాలు చూసే అనుమతి మీకు లేదు.',
	'ajaxpoll-view-results-before-vote-permission' => 'వోటు వెయ్యక ముందు, ఈ పోల్ ఫలితాలు చూసే అనుమతి మీకు లేదు.',
	'ajaxpoll-revoke-vote' => 'నా వోటును వెనక్కి తీసుకోవాలనుకుంటున్నాను',
	'ajaxpoll-vote-revoked' => 'మీవోటును వెనక్కి తీసుకున్నారు.',
	'ajaxpoll-error-csrf-wrong-token' => 'తప్పు టోకెన్ వచ్చింది, మీ వోటును గణించలేదు.',
	'right-ajaxpoll-vote' => 'AJAX-ఆధారిత పోల్‍లలో వోటు వెయ్యవచ్చు',
	'right-ajaxpoll-view-results' => 'AJAX-ఆధారిత పోల్‍లలో ఫలితాలు చూడవచ్చు',
	'right-ajaxpoll-view-results-before-vote' => 'AJAX-ఆధారిత పోల్‍లలో వోటు వెయ్యకముందే ఫలితాలు చూడవచ్చు',
	'action-ajaxpoll-vote' => 'AJAX-ఆధారిత పోల్‍లలో వోటు వెయ్యి',
	'action-ajaxpoll-view-results' => 'AJAX-ఆధారిత పోల్‍లలో ఫలితాలు చూడు',
	'action-ajaxpoll-view-results-before-vote' => 'AJAX-ఆధారిత పోల్‍లలో వోటు వెయ్యక ముందే ఫలితాలు చూడు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'ajaxpoll-desc' => 'Nagpapahintulot ng mga paghalal na nakabatay sa AJAX na may tatak na <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Mga pahinang may botohan',
	'ajaxpoll-vote-update' => 'Naisapanahon na ang boto mo.',
	'ajaxpoll-vote-add' => 'Naidagdag na ang boto mo.',
	'ajaxpoll-vote-error' => 'Nagkaroon ng isang suliranin sa pagsasagawa ng boto mo, pakisubukang muli.',
	'ajaxpoll-percent-votes' => '$1% ng lahat ng mga pagboto',
	'ajaxpoll-your-vote' => 'Bumoto ka na para kay "$1" noong $2, mababago mo ang iyong boto sa pamamagitan ng pagpindot sa isang sagot na nasa ibaba.',
	'ajaxpoll-no-vote' => 'Bumoto po sa ibaba.',
	'ajaxpoll-info' => 'Mayroong {{PLURAL:$1|isang pagboto|$1 na mga pagboto}} magmula noong likhain ang halalan noong $2.',
	'ajaxpoll-submitting' => 'Pakihintay, ipinapasa ang boto mo.',
	'ajaxpoll-vote-permission' => 'Hindi ka nabigyan ng karapatan upang makaboto.',
	'ajaxpoll-revoke-vote' => 'Nais kong pawalan ng bisa ang boto ko',
	'ajaxpoll-vote-revoked' => 'Matagumpay mong napawalangbisa ang boto mo.', # Fuzzy
	'right-ajaxpoll-vote' => 'Makakaboto sa mga halalang nakabatay sa AJAX',
);

/** Turkish (Türkçe)
 * @author Hedda Gabler
 * @author Incelemeelemani
 */
$messages['tr'] = array(
	'ajaxpoll-vote-update' => 'Oyunuz güncelleştirildi.',
	'ajaxpoll-vote-add' => 'Oyunuz eklendi.',
	'ajaxpoll-revoke-vote' => 'Ben oyumu geri almak istiyorum',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Arlin
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'ajaxpoll-tracking-category' => 'ئاۋاز بار بەتلەر',
	'ajaxpoll-vote-update' => 'سىز بەرگەن ئاۋاز يېڭىلاندى.',
	'ajaxpoll-vote-add' => 'سىز بەرگەن ئاۋاز قېتىلدى.',
	'ajaxpoll-vote-error' => 'سىز بەرگەن ئاۋازنى بىرتەرەپ قىلىش جەريانىدا مەسىلە كۆرۈلدى، قايتا سىناڭ.',
	'ajaxpoll-percent-votes' => 'بارلىق ئاۋازنىڭ $1%',
	'ajaxpoll-no-vote' => 'ئاستىدا بىلەت تاشلاڭ.',
	'ajaxpoll-submitting' => 'سەل كۈتۈڭ، تاشلىغان بىلىتىڭىزنى يوللاۋاتىدۇ.',
	'ajaxpoll-vote-permission' => 'بىلەت تاشلاش ھوقۇقىڭىز يوق.',
	'ajaxpoll-revoke-vote' => 'تاشلىغان بىلىتىمنى بىكار قىلىمەن',
	'ajaxpoll-vote-revoked' => 'تاشلىغان بىلىتىڭىزنى مۇۋەپپەقىيەتلىك بىكار قىلدىڭىز.', # Fuzzy
	'right-ajaxpoll-vote' => 'AJAX ئاساسىدىكى بىلەت تاشلاش رايونىدا بىلەت تاشلىيالايسىز',
);

/** Ukrainian (українська)
 * @author A1
 * @author Andriykopanytsia
 * @author Base
 * @author Ата
 */
$messages['uk'] = array(
	'ajaxpoll-desc' => 'Дозволяє голосування на основі AJAX з міткою <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-tracking-category' => 'Сторінки з опитуваннями',
	'ajaxpoll-vote-update' => 'Ваш голос був поновлений.',
	'ajaxpoll-vote-add' => 'Ваш голос був доданий.',
	'ajaxpoll-vote-error' => 'Виникла проблема з обробкою вашого голосу, будь-ласка, спробуйте знову.',
	'ajaxpoll-percent-votes' => '$1% усіх голосів',
	'ajaxpoll-your-vote' => 'Ви вже проголосували за " $1 " на  $2 , ви можете змінити свій голос, натиснувши відповідь нижче.',
	'ajaxpoll-no-vote' => 'Будь ласка, голосуйте нижче.',
	'ajaxpoll-no-vote-results-after-voting' => 'Будь ласка, проголосуйте нижче. Результати будуть показані після того, як ви проголосуєте.',
	'ajaxpoll-info' => 'З моменту створення голосування $2 {{PLURAL:$1|надійшов $1 голос|надійшло $1 голоси|надійшло $1 голосів}}.',
	'ajaxpoll-submitting' => 'Будь ласка, почекайте, ваш голос обробляється  ...',
	'ajaxpoll-vote-permission' => 'Ви не можете голосувати',
	'ajaxpoll-view-results-permission' => 'Ви не можете переглядати результати цього опитування.',
	'ajaxpoll-view-results-before-vote-permission' => 'Ви не можете переглядати результати цього опитування, поки не проголосуєте.',
	'ajaxpoll-revoke-vote' => 'Я хочу скасувати свій голос',
	'ajaxpoll-vote-revoked' => 'Ваш голос скасовано.',
	'ajaxpoll-error-csrf-wrong-token' => 'Отримано неправильний маркер, Ваш голос не враховано.',
	'right-ajaxpoll-vote' => 'Можете голосувати в опитуваннях на основі AJAX',
	'right-ajaxpoll-view-results' => 'Можна переглянути результати в AJAX основі опитувань',
	'right-ajaxpoll-view-results-before-vote' => 'Можна переглянути результати в AJAX основі опитувань до того, як проголосували',
	'action-ajaxpoll-vote' => 'голосувати в опитуваннях на основі AJAX',
	'action-ajaxpoll-view-results' => 'подивитися результати опитувань на основі AJAX',
	'action-ajaxpoll-view-results-before-vote' => 'перегляд результатів опитувань на основі AJAX перед голосуванням',
);

/** Vietnamese (Tiếng Việt)
 * @author Baonguyen21022003
 * @author Minh Nguyen
 * @author Withoutaname
 */
$messages['vi'] = array(
	'ajaxpoll-tracking-category' => 'Trang có thăm dò ý kiến',
	'ajaxpoll-percent-votes' => '$1% trên tổng số phiếu',
	'ajaxpoll-your-vote' => 'Bạn đã bỏ phiếu cho “$1” vào $2. Để thay đổi phiếu bầu của bạn, nhập một câu trả lời khác dưới đây.',
	'ajaxpoll-no-vote' => 'Xin hãy bỏ phiếu dưới đây.',
	'ajaxpoll-no-vote-results-after-voting' => 'Xin vui lòng bình chọn dưới đây. Kết quả sẽ được hiển thị khi nào bạn bỏ phiếu rồi.',
	'ajaxpoll-info' => 'Có $1 phiếu từ khi biểu quyết đã được tạo ra vào $2.',
	'ajaxpoll-submitting' => 'Xin chờ, đang đệ trình phiếu của bạn.',
	'ajaxpoll-vote-permission' => 'Bạn không có quyền bỏ phiếu.',
	'ajaxpoll-view-results-permission' => 'Bạn không có quyền xem kết quả của biểu quyết này.',
	'ajaxpoll-view-results-before-vote-permission' => 'Bạn không có quyền xem kết quả của biểu quyết này trước khi bạn đã bỏ phiếu.',
);

/** Chinese (中文)
 * @author 許瑜真 (Yuchen Hsu/KaurJmeb)
 */
$messages['zh'] = array(
	'ajaxpoll-no-vote' => '請於下方投票',
	'ajaxpoll-percent-votes' => '$1%',
	'ajaxpoll-submitting' => '正在處理您的投票，請稍候。',
	'ajaxpoll-vote-add' => '您的投票已計入',
	'ajaxpoll-vote-error' => '投票過程發生問題，請再試一次',
	'ajaxpoll-vote-update' => '你的投票已更新',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 * @author Mys 721tx
 * @author Qiyue2001
 * @author Simon Shek
 * @author StephDC
 * @author Yfdyh000
 * @author Zhangjintao
 * @author Zoglun
 */
$messages['zh-hans'] = array(
	'ajaxpoll-desc' => '使用<tt>&lt;poll&gt;</tt> 标签（tag）添加基于AJAX的投票功能。',
	'ajaxpoll-tracking-category' => '有投票的页面',
	'ajaxpoll-vote-update' => '已更新您的投票。',
	'ajaxpoll-vote-add' => '已计入您的投票。',
	'ajaxpoll-vote-error' => '处理您的投票出现问题，请再试一次。',
	'ajaxpoll-percent-votes' => '所有选票的$1%',
	'ajaxpoll-your-vote' => '您在$2已经投票给“$1”，您可以点击下面的答案更改您的投票。',
	'ajaxpoll-no-vote' => '请在下面投票。',
	'ajaxpoll-no-vote-results-after-voting' => '请在下面投票。当你投票后，结果将会显示。',
	'ajaxpoll-info' => '自$2创建以来共有{{PLURAL:$1|一人投票| $1 人投票}}。',
	'ajaxpoll-submitting' => '请稍候，正在提交您的投票。',
	'ajaxpoll-vote-permission' => '您没有投票权。',
	'ajaxpoll-view-results-permission' => '你没有权限查看这个投票的结果',
	'ajaxpoll-view-results-before-vote-permission' => '您在投票前无权查看投票结果。',
	'ajaxpoll-revoke-vote' => '我想撤销我的投票',
	'ajaxpoll-vote-revoked' => '您已撤销您的投票。',
	'ajaxpoll-error-csrf-wrong-token' => '你输入了错误的标记，你的投票将无效',
	'right-ajaxpoll-vote' => '可在基于AJAX的投票区投票',
	'right-ajaxpoll-view-results' => '可查看基于AJAX的调查结果',
	'right-ajaxpoll-view-results-before-vote' => '可在投票前查看基于AJAX的调查结果',
	'action-ajaxpoll-vote' => '在基于AJAX的投票页面中投票',
	'action-ajaxpoll-view-results' => '在基于AJAX的投票页面查看结果',
	'action-ajaxpoll-view-results-before-vote' => '在基于AJAX的投票页面投票之前预览结果',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'ajaxpoll-desc' => '使用<tt>&lt;poll&gt;</tt>添加基於AJAX的投票功能',
	'ajaxpoll-tracking-category' => '有投票的頁面',
	'ajaxpoll-vote-update' => '已更新您的投票。',
	'ajaxpoll-vote-add' => '已添加您的投票。',
	'ajaxpoll-vote-error' => '處理您的投票發生問題，請再試一次。',
	'ajaxpoll-percent-votes' => '所有選票的$1%',
	'ajaxpoll-your-vote' => '您在$2已經投票給“$1”，您可以點擊下面的答案更改您的投票。',
	'ajaxpoll-no-vote' => '請在下面投票。',
	'ajaxpoll-no-vote-results-after-voting' => '請在下面投票。當你投票後，結果將會顯示。',
	'ajaxpoll-info' => '自$2建立以來共有{{PLURAL:$1|一人投票|$1人投票}}。',
	'ajaxpoll-submitting' => '請稍候，正提交您的投票.',
	'ajaxpoll-vote-permission' => '您無權投票。',
	'ajaxpoll-view-results-permission' => '你無權查看此投票的結果。',
	'ajaxpoll-view-results-before-vote-permission' => '你無權在你未投票前查看此投票的結果。',
	'ajaxpoll-revoke-vote' => '我想撤銷我的投票',
	'ajaxpoll-vote-revoked' => '您的投票已撤銷。',
	'ajaxpoll-error-csrf-wrong-token' => '收到錯誤的令牌，你的投票會被忽略。',
	'right-ajaxpoll-vote' => '可在基於AJAX的投票區投票',
);
