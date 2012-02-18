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
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'ajaxpoll-desc' => 'AJAX-апытаньні, якія можна дадаць тэгам <tt>&lt;poll&gt;</tt>',
	'ajaxpoll-vote-update' => 'Ваш голас абноўлены.',
	'ajaxpoll-vote-add' => 'Ваш голас захаваны.',
	'ajaxpoll-vote-error' => 'Адбылася памылка падчас захаваньня Вашага голасу, калі ласка, паспрабуйце яшчэ.',
	'ajaxpoll-percent-votes' => '$1% ад усіх галасоў',
	'ajaxpoll-your-vote' => 'Вы ўжо прагаласавалі за варыянт «$1» $2. Вы можаце зьмяніць свой выбар, націснуўжы адзін з пададзеных ніжэй адказаў.',
	'ajaxpoll-no-vote' => 'Калі ласка, прагаласуйце ніжэй.',
	'ajaxpoll-info' => 'З моманту стварэньня галасаваньня $2 {{PLURAL:$1|пададзены $1 голас|пададзеныя $1 галасы|пададзена $1 галасоў}}.',
	'ajaxpoll-submitting' => 'Калі ласкай, чакайце, ваш голас апрацоўваецца.',
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
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'ajaxpoll-vote-update' => 'Ihre Stimme wurde aktualisiert.',
	'ajaxpoll-vote-add' => 'Ihre Stimme wurde gezählt.',
	'ajaxpoll-vote-error' => 'Es gab ein Problem beim Verarbeiten Ihrer Stimme. Probieren Sie bitte noch einmal.',
	'ajaxpoll-your-vote' => 'Sie haben bereits am $2 für „$1“ abgestimmt. Sie können Ihre Stimme ändern, indem Sie eine der untenstehenden Antworten anklicken.',
	'ajaxpoll-no-vote' => 'Bitte stimmen Sie unten ab.',
	'ajaxpoll-submitting' => 'Bitte warten Sie kurz. Ihre Stimme wird verarbeitet.',
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
	'ajaxpoll-percent-votes' => '$1% kaikista äänistä',
	'ajaxpoll-your-vote' => 'Äänestit jo vaihtoehtoa "$1" $2, voit muuttaa ääntäsi napsauttamalla vastausta alempana',
	'ajaxpoll-no-vote' => 'Voit äänestää alempana.',
	'ajaxpoll-info' => '{{PLURAL:$1|Yksi ääni|$1 ääntä}} on annettu siitä lähtien kun tämä äänestys tehtiin, $2.',
	'ajaxpoll-submitting' => 'Odota hetki, äänesi lähetetään kirjattavaksi.',
);

/** French (Français)
 * @author Tim 'Avatar' Bartel
 */
$messages['fr'] = array(
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
	'ajaxpoll-vote-update' => 'Är Stëmm gouf aktualiséiert.',
	'ajaxpoll-vote-add' => 'Är Stëmm gouf derbäigesat.',
	'ajaxpoll-vote-error' => 'Et gouf e Problem beim Verschaffe vun Ärer Stëmm, probéiert et w.e.g. nach eng kéier.',
	'ajaxpoll-percent-votes' => '$1% vun alle Stëmmen',
	'ajaxpoll-no-vote' => 'Stëmmt w.e.g hei drënner mat of.',
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
	'ajaxpoll-info' => 'Er zijn {{PLURAL:$1|een stem|$1 stemmen}} uitgebracht sinds de peiling op $2 is aangemaakt.',
	'ajaxpoll-submitting' => 'Even geduld alstublieft. Uw stem wordt opgeslagen...',
);

/** Polish (Polski)
 * @author BeginaFelicysym
 * @author Dariusz Siedlecki
 */
$messages['pl'] = array(
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
	'ajaxpoll-vote-update' => "Tò vot a l'é stàit modificà.",
	'ajaxpoll-vote-add' => "Tò vot a l'é stàit giontà.",
	'ajaxpoll-vote-error' => "A l'é staje un problema an tratand sò vot, për piasì ch'a preuva torna.",
	'ajaxpoll-percent-votes' => '$1% ëd tùit ij vot',
	'ajaxpoll-your-vote' => 'A l\'ha già votà për "$1" su $2; a peul cangé sò vot an sgnacand su na rispòsta sì-sota.',
	'ajaxpoll-no-vote' => 'Për piasì, voté sì-sota.',
	'ajaxpoll-info' => "A son staje $1 vot da quand ël sondagi a l'é stàit creà su $2.",
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
	'ajaxpoll-vote-update' => 'Ваш голос обновлён.',
	'ajaxpoll-vote-add' => 'Ваш голос добавлен.',
	'ajaxpoll-vote-error' => 'Возникла проблема с обработкой вашего голоса, пожалуйста, попробуйте ещё раз.',
	'ajaxpoll-percent-votes' => '$1% от всех голосов',
	'ajaxpoll-your-vote' => 'Вы уже проголосовали «$1» $2. Вы можете изменить свой выбор, нажав на один из представленных ниже ответов.',
	'ajaxpoll-no-vote' => 'Пожалуйста, проголосуйте ниже.',
	'ajaxpoll-info' => 'С момента создания голосования $2 поступило $1 голосов.',
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

