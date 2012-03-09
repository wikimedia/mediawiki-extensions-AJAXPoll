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
 */
$messages['en'] = array(
	'ajaxpoll-desc' => 'Allows AJAX-based polls with <tt>&lt;poll&gt;</tt> tag',
	'ajaxpoll-tracking-category' => 'Poll',
	'ajaxpoll-vote-update' => 'Your vote has been updated.',
	'ajaxpoll-vote-add' => 'Your vote has been added.',
	'ajaxpoll-vote-error' => 'There was a problem with processing your vote, please try again.',
	'ajaxpoll-percent-votes' => '$1% of all votes',
	'ajaxpoll-your-vote' => 'You already voted for "$1" on $2, you can change your vote by clicking an answer below.',
	'ajaxpoll-no-vote' => 'Please vote below.', // http://trac.wikia-code.com/changeset/867
	'ajaxpoll-info' => 'There {{PLURAL:$1|was one vote|were $1 votes}} since the poll was created on $2.',
	'ajaxpoll-submitting' => 'Please wait, submitting your vote.',
);

/** Message documentation (Message documentation) */
$messages['qqq'] = array(
	'ajaxpoll-tracking-category' => 'The name of a category for all pages which use the <poll> parser extension tag. The category is automatically added unless the feature is disabled.',
	'ajaxpoll-percent-votes' => '$1 is the percentage number of the votes',
	'ajaxpoll-your-vote' => '$1 is the answer name, $2 is the date when the answer was casted',
	'ajaxpoll-info' => '$1 is the number of votes, $2 is when the poll was started',
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
 * @author OsamaK
 */
$messages['ar'] = array(
	'ajaxpoll-vote-update' => 'تم تحديث صوتك.',
	'ajaxpoll-vote-add' => 'تم إضافة تصويتك',
	'ajaxpoll-info' => 'هذه كانت $1 تصويتا منذ بداية التصويت في $2.',
	'ajaxpoll-submitting' => 'من فضلك انتظر، يرسل صوتك.',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'ajaxpoll-desc' => 'Дазваляе AJAX-апытаньні, якія можна дадаць тэгам <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Ваш голас быў абноўлены.',
	'ajaxpoll-vote-add' => 'Ваш голас быў даданы.',
	'ajaxpoll-vote-error' => 'Адбылася памылка падчас захаваньня Вашага голасу, калі ласка, паспрабуйце яшчэ.',
	'ajaxpoll-percent-votes' => '$1% ад усіх галасоў',
	'ajaxpoll-your-vote' => 'Вы ўжо прагаласавалі за варыянт «$1» $2, Вы можаце зьмяніць свой выбар, націснуўжы адзін з пададзеных ніжэй адказаў.',
	'ajaxpoll-no-vote' => 'Калі ласка, прагаласуйце ніжэй.',
	'ajaxpoll-info' => 'З моманту стварэньня галасаваньня $2 {{PLURAL:$1|пададзены $1 голас|пададзеныя $1 галасы|пададзена $1 галасоў}}.',
	'ajaxpoll-submitting' => 'Калі ласкай, чакайце, ваш голас дадаецца.',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'ajaxpoll-percent-votes' => '$1% от всички гласове',
);

/** Breton (Brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'ajaxpoll-vote-update' => 'Hizivaet eo bet ho vot.',
	'ajaxpoll-vote-add' => 'Ouzhpennet eo bet ho vot.',
	'ajaxpoll-vote-error' => "Ur gudenn a zo bet pa vezer oc'h ober war-dro ho vot. Mar plij klaskit adarre.",
	'ajaxpoll-percent-votes' => '$1% eus hollad ar mouezhioù',
	'ajaxpoll-your-vote' => 'Votet ho peus dija evit "$1" d\'an $2, tu \'zo deoc\'h kemmañ ho vot en ur klikañ war unan eus ar respontoù da heul.',
	'ajaxpoll-no-vote' => 'Mar plij votit amañ dindan.',
	'ajaxpoll-info' => "$1 vot a zo bet abaoe ma 'z eo bet krouet ar sontadeg war $2.",
	'ajaxpoll-submitting' => "Mar plij gortozit, emeur oc'h ober war-dro ho vot.",
);

/** German (Deutsch)
 * @author Kghbln
 * @author Tim 'Avatar' Bartel
 */
$messages['de'] = array(
	'ajaxpoll-desc' => 'Ergänzt das Tag <code>&lt;poll&gt;</code> zum Erstellen AJAX-gestützter Umfragen',
	'ajaxpoll-vote-update' => 'Deine Stimme wurde aktualisiert.',
	'ajaxpoll-vote-add' => 'Deine Stimme wurde gezählt.',
	'ajaxpoll-vote-error' => 'Es gab ein Problem beim Verarbeiten deiner Stimme. Probiere es bitte noch einmal.',
	'ajaxpoll-percent-votes' => '$1 % aller Stimmen',
	'ajaxpoll-your-vote' => 'Du hast bereits am $2 für „$1“ abgestimmt. Du kannst deine Stimme ändern, indem du eine der untenstehenden Antworten anklickst.',
	'ajaxpoll-no-vote' => 'Bitte stimme unten ab.',
	'ajaxpoll-info' => 'Es {{PLURAL:$1|wurde|wurden}} seit Erstellung der Umfrage am $2 {{PLURAL:$1|eine Stimme|$1 Stimmen}} abgegeben.',
	'ajaxpoll-submitting' => 'Bitte warte kurz. Deine Stimme wird verarbeitet.',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
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
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'ajaxpoll-desc' => 'Pśidawa toflicku <tt>&lt;poll&gt;</tt> za wótgłosowanja na zakłaźe AJAX',
	'ajaxpoll-vote-update' => 'Twójo wótgłosowanje jo se zaktualizěrowało.',
	'ajaxpoll-vote-add' => 'Twójo wótgłosowanje jo se pśidało.',
	'ajaxpoll-vote-error' => 'Jo problem był pśi pśeźěłowanju twójogo głosa, pšosym wopytaj hyšći raz.',
	'ajaxpoll-percent-votes' => '$1 % wšyknych głosow',
	'ajaxpoll-your-vote' => 'Sy južo $2 za "$1" wótgłosował, móžoš swój głos změniś, z tym až kliknjoš dołojce na wótegrono.',
	'ajaxpoll-no-vote' => 'Pšosym wótgłosuj dołojce.',
	'ajaxpoll-info' => '{{PLURAL:$1|Jo se jaden głos wótedał|Stej se $1 głosa wótedałej|Su se $1 głose wótedali|Jo se $1 głosow wótedało}}, wót casa ako wótgłosowanje jo se $2 napórało.',
	'ajaxpoll-submitting' => 'Pšosym cakaj, twój głos se pśeźěłujo.',
);

/** Greek (Ελληνικά)
 * @author Περίεργος
 */
$messages['el'] = array(
	'ajaxpoll-vote-update' => 'Η ψήφος σας έχει ενημερωθεί.',
	'ajaxpoll-vote-add' => 'Η ψήφος σας προστέθηκε.',
	'ajaxpoll-vote-error' => 'Παρουσιάστηκε πρόβλημα κατά την επεξεργασία της ψήφους σας, παρακαλώ ξαναπροσπαθήστε.',
	'ajaxpoll-percent-votes' => '$1% επί των συνολικών ψήφων',
	'ajaxpoll-your-vote' => 'Έχετε ήδη ψηφίσει το $1 στο $2, μπορείτε να αλλάξετε τη ψήφο σας πατώντας μια απάντηση παρακάτω.',
	'ajaxpoll-no-vote' => 'Παρακαλώ ψηφίστε παρακάτω.',
	'ajaxpoll-info' => 'Υπάρχουν $1 ψήφοι από τότε που δημιουργήθηκε η ψηφοφορία στις $2.',
	'ajaxpoll-submitting' => 'Παρακαλώ περιμένετε,η ψήφο σας υποβάλλεται.',
);

/** Spanish (Español)
 * @author Armando-Martin
 * @author Bola
 */
$messages['es'] = array(
	'ajaxpoll-desc' => 'Permite encuestas basadas en AJAX con etiqueta <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Tu voto ha sido actualizado.',
	'ajaxpoll-vote-add' => 'Tu voto ha sido añadido.',
	'ajaxpoll-vote-error' => 'Ha habido un problema cuando comprobábamos tu voto, por favor, inténtalo de nuevo.',
	'ajaxpoll-percent-votes' => '$1% de todos los votos',
	'ajaxpoll-your-vote' => 'Ya votaste por "$1" el $2, puedes cambiar tu voto haciendo clic en una respuesta debajo.',
	'ajaxpoll-no-vote' => 'Por favor, vota debajo.',
	'ajaxpoll-info' => 'Ha habido {{PLURAL:$1|un voto|$1 votos}} desde que la encuesta fue creada el $2.',
	'ajaxpoll-submitting' => 'Por favor espera, estamos comprobando tu voto, ten paciencia.',
);

/** Finnish (Suomi)
 * @author Jack Phoenix
 * @author Nike
 */
$messages['fi'] = array(
	'ajaxpoll-vote-update' => 'Äänesi on päivitetty',
	'ajaxpoll-vote-add' => 'Äänesi on lisätty.',
	'ajaxpoll-vote-error' => 'Äänesi prosessoimisessa oli ongelma, yritä uudelleen.',
	'ajaxpoll-percent-votes' => '$1 % kaikista äänistä',
	'ajaxpoll-your-vote' => 'Äänestit jo vaihtoehtoa ”$1” $2, voit muuttaa ääntäsi napsauttamalla vastausta alempana',
	'ajaxpoll-no-vote' => 'Voit äänestää alempana.',
	'ajaxpoll-info' => '{{PLURAL:$1|Yksi ääni|$1 ääntä}} on annettu siitä lähtien kun tämä äänestys tehtiin, $2.',
	'ajaxpoll-submitting' => 'Odota hetki, äänesi lähetetään kirjattavaksi.',
);

/** French (Français)
 * @author Gomoko
 * @author Tim 'Avatar' Bartel
 */
$messages['fr'] = array(
	'ajaxpoll-desc' => 'Autorise les interrogations basées sur AJAX avec <tt>&lt;poll&gt;</tt> tag',
	'ajaxpoll-vote-update' => 'Ta voix est actualisé.',
	'ajaxpoll-vote-add' => 'Ta voix était compté.',
	'ajaxpoll-vote-error' => "Il y avait une problème avec le traitement de ta voix. Essaie-cela s'il te plaît encore une fois.",
	'ajaxpoll-percent-votes' => '$1% de tous voix.',
	'ajaxpoll-your-vote' => "Tu a déjà voté pour $1 (à $2). Tu peux changer ta voix, si tu cliques à l'une des réponses en bas.",
	'ajaxpoll-no-vote' => 'Vote en bas.',
	'ajaxpoll-info' => "Il y avait {{PLURAL:$1|une voix|$1 voix}}, depuis l'élaboration du sondage au $2.",
	'ajaxpoll-submitting' => 'Attends une moment, ta voix est traité...',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'ajaxpoll-desc' => 'Permite as enquisas baseadas en AJAX mediante a etiqueta <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Actualizouse o seu voto.',
	'ajaxpoll-vote-add' => 'Engadiuse o seu voto.',
	'ajaxpoll-vote-error' => 'Houbo algún problema co procesamento do seu voto. Por favor, inténteo de novo.',
	'ajaxpoll-percent-votes' => '$1% do total dos votos',
	'ajaxpoll-your-vote' => 'Xa votou por "$1" o $2. Pode cambiar o seu voto premendo nunha resposta das que aparecen a continuación.',
	'ajaxpoll-no-vote' => 'Por favor, vote a continuación.',
	'ajaxpoll-info' => '{{PLURAL:$1|Recibiuse un voto|Recibíronse $1 votos}} desde que a enquisa foi creada o $2.',
	'ajaxpoll-submitting' => 'Por favor, agarde durante o envío do seu voto.',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'ajaxpoll-desc' => 'אפשרות להוסיף הצבעות בטכנולוגיית AJAX באמצעות התג <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'הקול שלך עודכן.',
	'ajaxpoll-vote-add' => 'הקול שלך נוסף.',
	'ajaxpoll-vote-error' => 'הייתה בעיה בעיבוד הקול שלך, נא לנסות שוב.',
	'ajaxpoll-percent-votes' => '$1% מכל הקולות.',
	'ajaxpoll-your-vote' => 'כבר הצבעת בעד "$1" ב{{GRAMMAR:תחילית|$2}}, אפשר לשנות את קולך באמצעות לחיצה על תשובה להלן.',
	'ajaxpoll-no-vote' => 'נא להצביע להלן.',
	'ajaxpoll-info' => '{{PLURAL:$1|נקלט קול אחד|נקלטו $1 קולות}} מאז שההצבעה נוצרה ב־$2.',
	'ajaxpoll-submitting' => 'נא להמתין הזמן שליחת הצבעתך.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'ajaxpoll-desc' => 'Přidawa tafličku <tt>&lt;poll&gt;</tt> za wotghosowanja na zakładźe AJAX',
	'ajaxpoll-vote-update' => 'Twoje wothłosowanje je so zaktualizowało.',
	'ajaxpoll-vote-add' => 'Twoje wothłosowanje je so přidało.',
	'ajaxpoll-vote-error' => 'Je problem při předźěłowanju twojeho hłosa był, prošu spytaj hišće raz.',
	'ajaxpoll-percent-votes' => '$1 % wšěch hłosow',
	'ajaxpoll-your-vote' => 'Sy hižo $2 za "$1" wothłosował, móžeš swój hłós změnić, kliknjo deleka na wotmołwu.',
	'ajaxpoll-no-vote' => 'Prošu wothłosuj deleka.',
	'ajaxpoll-info' => '{{PLURAL:$1|Je so jedyn hłós wotedał|Stej so $1 hłosaj wotedałoj|Su so $1 hłosy wotedali|Je so $1 hłosow wotedało}}, wot toho časa, zo wothłosowanje je so $2 wutworiło.',
	'ajaxpoll-submitting' => 'Prošu čakaj, twój hłós so předźěłuje.',
);

/** Hungarian (Magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'ajaxpoll-vote-update' => 'A szavazatod frissítve.',
	'ajaxpoll-vote-add' => 'A szavazatod rögzítve.',
	'ajaxpoll-no-vote' => 'Kérlek szavazz alant.',
	'ajaxpoll-submitting' => 'Kérlek várj a szavazatod elküldésére.',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'ajaxpoll-desc' => 'Permitte sondages a base de AJAX con le etiquetta <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Tu voto ha essite actualisate.',
	'ajaxpoll-vote-add' => 'Tu voto ha essite addite.',
	'ajaxpoll-vote-error' => 'Un problema occurreva durante le tractamento de tu voto. Per favor reproba.',
	'ajaxpoll-percent-votes' => '$1% de tote le votos',
	'ajaxpoll-your-vote' => 'Tu ha ja votate pro "$1" in $2. Tu pote cambiar tu voto per cliccar super un responsa hic infra.',
	'ajaxpoll-no-vote' => 'Per favor vota hic infra.',
	'ajaxpoll-info' => 'Il habeva $1 {{PLURAL:$1|voto|votos}} post le creation del sondage al $2.',
	'ajaxpoll-submitting' => 'Un momento, tu voto es submittite.',
);

/** Japanese (日本語)
 * @author Shun Fukuzawa
 */
$messages['ja'] = array(
	'ajaxpoll-vote-update' => '投票を更新しました。',
	'ajaxpoll-vote-add' => '投票が追加されました。',
	'ajaxpoll-vote-error' => '問題が発生しました。少ししてから再度投票してください。',
	'ajaxpoll-percent-votes' => '全体の$1%',
	'ajaxpoll-your-vote' => '$2について、$1に投票しています。以下の回答をクリックすると、投票を変更できます。',
	'ajaxpoll-no-vote' => 'さあ、投票しよう!',
	'ajaxpoll-submitting' => '投票を処理しています。少しお待ちください。',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'ajaxpoll-desc' => 'Erlaabt AJAX-baséiert Ëmfroe mam Tag <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Är Stëmm gouf aktualiséiert.',
	'ajaxpoll-vote-add' => 'Är Stëmm gouf derbäigesat.',
	'ajaxpoll-vote-error' => 'Et gouf e Problem beim Verschaffe vun Ärer Stëmm, probéiert et w.e.g. nach eng kéier.',
	'ajaxpoll-percent-votes' => '$1% vun alle Stëmmen',
	'ajaxpoll-your-vote' => 'Dir hutt schonn den $2 fir "$1" gestëmmt, Dir kënnt Är Stëmm änneren an deem Dir op d\'Äntwert hei drënner klickt.',
	'ajaxpoll-no-vote' => 'Stëmmt w.e.g hei drënner mat of.',
	'ajaxpoll-info' => 'Zënter dem Ufank vun der Ëmfro den $2 {{PLURAL:$1 gouf eng Stëmm|goufe(n) $1 Stëmmen}} ofginn.',
	'ajaxpoll-submitting' => 'Waart w.e.g., Är Stëmm gëtt verschafft.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'ajaxpoll-desc' => 'Овозможува анкети на основа на AJAX со ознаката <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Вашиот глас е подновен.',
	'ajaxpoll-vote-add' => 'Вашиот глас е додаден.',
	'ajaxpoll-vote-error' => 'Се појави проблем при обработката на вашиот глас. Обидете се повторно.',
	'ajaxpoll-percent-votes' => '$1% од вкупниот број на гласови',
	'ajaxpoll-your-vote' => 'Веќе имате гласано за „$1“ на $2; можете да го промените гласот со кликнување на еден од одговорите подолу.',
	'ajaxpoll-no-vote' => 'Гласајте подолу.',
	'ajaxpoll-info' => 'Откако е создадена анкетата ($2) {{PLURAL:$1|даден еден глас|дадени се $1 гласа}}.',
	'ajaxpoll-submitting' => 'Почекајте, го заведувам вашиот глас.',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'ajaxpoll-vote-update' => 'Din stemme har blitt oppdatert.',
	'ajaxpoll-vote-add' => 'Din stemme har blitt lagt til.',
	'ajaxpoll-vote-error' => 'Det oppstod et problem med behandlingen av din stemme, vennligst prøv igjen.',
	'ajaxpoll-percent-votes' => '$1% av alle stemmer',
	'ajaxpoll-your-vote' => 'Du har allerede stemt på «$1» den $2, du kan endre din stemme ved å klikke på et svar nedenfor.',
	'ajaxpoll-no-vote' => 'Vennligst stem nedenfor.',
	'ajaxpoll-info' => 'Det var $1 stemmer siden spørreundersøkelsen ble opprettet den $2.', // @todo FIXME: out of date, needs PLURAL
	'ajaxpoll-submitting' => 'Vennligst vent, sender inn stemmen din.',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'ajaxpoll-desc' => 'Maakt AJAX-gebaseerde polls mogelijk met de tag <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Uw stem is bijgewerkt.',
	'ajaxpoll-vote-add' => 'Uw stem is toegevoegd.',
	'ajaxpoll-vote-error' => 'Er is een probleem opgetreden tijdens het verwerken van uw stem. Probeer het opnieuw.',
	'ajaxpoll-percent-votes' => '$1% van alle stemmen',
	'ajaxpoll-your-vote' => 'U hebt al voor "$1" gestemd op $2. U kunt uw stem wijzigen door hieronder op een antwoord te klikken.',
	'ajaxpoll-no-vote' => 'Stem hieronder.',
	'ajaxpoll-info' => 'Er {{PLURAL:$1|is één stem|zijn $1 stemmen}} uitgebracht sinds de peiling op $2 is aangemaakt.',
	'ajaxpoll-submitting' => 'Even geduld alstublieft. Uw stem wordt opgeslagen...',
);

/** Polish (Polski)
 * @author BeginaFelicysym
 * @author Dariusz Siedlecki
 */
$messages['pl'] = array(
	'ajaxpoll-desc' => 'Umożliwia wstawienie opartych na technologii AJAX ankiet przy pomocy znacznika <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Twój głos został zmieniony.',
	'ajaxpoll-vote-add' => 'Twój głos został dodany.',
	'ajaxpoll-vote-error' => 'Wystąpił błąd w czasie dodawania głosu, proszę spróbować później.',
	'ajaxpoll-percent-votes' => '$1% wszystkich głosów',
	'ajaxpoll-your-vote' => 'Zagłosowałeś juz na "$1" $2, możesz zaktualizować swój głos klikając na odpowiedź poniżej.',
	'ajaxpoll-no-vote' => 'Podaj swój głos poniżej.',
	'ajaxpoll-info' => 'Oddano już {{PLURAL:$1|jeden głos|$1 głosy|$1 głosów}} od założenia ankiety dnia $2.',
	'ajaxpoll-submitting' => 'Proszę czekać, trwa dodawanie głosu.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'ajaxpoll-desc' => 'A përmëtt votassion basà su AJAX con tichëtta <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => "Tò vot a l'é stàit modificà.",
	'ajaxpoll-vote-add' => "Tò vot a l'é stàit giontà.",
	'ajaxpoll-vote-error' => "A l'é staje un problema an tratand sò vot, për piasì ch'a preuva torna.",
	'ajaxpoll-percent-votes' => '$1% ëd tùit ij vot',
	'ajaxpoll-your-vote' => 'A l\'ha già votà për "$1" su $2; a peul cangé sò vot an sgnacand su na rispòsta sì-sota.',
	'ajaxpoll-no-vote' => 'Për piasì, voté sì-sota.',
	'ajaxpoll-info' => "A {{PLURAL:$1|l'é staje un vot|son staje $1 vot}} da quand ël sondagi a l'é stàit creà su $2.",
	'ajaxpoll-submitting' => "Për piasì ch'a speta, sò vot a l'é an camin ch'a riva.",
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Daemorris
 */
$messages['pt-br'] = array(
	'ajaxpoll-vote-update' => 'Seu voto foi atualizado.',
	'ajaxpoll-vote-add' => 'Seu voto foi adicionado.',
	'ajaxpoll-vote-error' => 'Houve um problema com o processamento de seu voto, por favor tente novamente.',
	'ajaxpoll-percent-votes' => '$1% de todos votos',
	'ajaxpoll-your-vote' => 'Vocâ já votou para "$1" em $2, você pode alterar seu voto clicando em uma opção abaixo.',
	'ajaxpoll-no-vote' => 'Por favor vote abaixo.',
	'ajaxpoll-info' => '{{PLURAL:$1|Um voto|$1 votos}} desde a criação da votação em $2.',
	'ajaxpoll-submitting' => 'Por favor aguarde, enviando sua opção.',
);

/** Russian (Русский)
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'ajaxpoll-desc' => 'Позволяет проводить голосования на основе AJAX с помощью тега <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Ваш голос обновлён.',
	'ajaxpoll-vote-add' => 'Ваш голос добавлен.',
	'ajaxpoll-vote-error' => 'Возникла проблема с обработкой вашего голоса, пожалуйста, попробуйте ещё раз.',
	'ajaxpoll-percent-votes' => '$1% от всех голосов',
	'ajaxpoll-your-vote' => 'Вы уже проголосовали «$1» $2. Вы можете изменить свой выбор, нажав на один из представленных ниже ответов.',
	'ajaxpoll-no-vote' => 'Пожалуйста, проголосуйте ниже.',
	'ajaxpoll-info' => 'С момента создания голосования $2 {{PLURAL:$1|поступил $1 голос|поступило $1 голоса|поступило $1 голосов}}.',
	'ajaxpoll-submitting' => 'Пожалуйста, подождите, ваш голос обрабатывается.',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
 * @author Sasa Stefanovic
 * @author Verlor
 */
$messages['sr-ec'] = array(
	'ajaxpoll-vote-update' => 'аш глас је био урачунат.',
	'ajaxpoll-vote-add' => 'Ваш галс је додан',
	'ajaxpoll-percent-votes' => '$1% од свих гласова',
	'ajaxpoll-no-vote' => 'Молимо гласајте испод.',
	'ajaxpoll-submitting' => 'Чекајте, шаљемо ваш глас.',
);

/** Ukrainian (Українська)
 * @author A1
 */
$messages['uk'] = array(
	'ajaxpoll-desc' => 'Дозволяє голосування на основі AJAX з міткою <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Ваш голос був поновлений.',
	'ajaxpoll-vote-add' => 'Ваш голос був доданий.',
	'ajaxpoll-vote-error' => 'Виникла проблема з обробкою вашого голосу, будь-ласка, спробуйте знову.',
	'ajaxpoll-percent-votes' => '$1% усіх голосів',
	'ajaxpoll-your-vote' => 'Ви вже проголосували за " $1 " на  $2 , ви можете змінити свій голос, натиснувши відповідь нижче.',
	'ajaxpoll-no-vote' => 'Будь ласка, голосуйте нижче.',
	'ajaxpoll-submitting' => 'Будь ласка, почекайте, ваш голос обробляється  ...',
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

