<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
var allword=[];

allword = [
{withvery:"accurate",novery:"precise, exact, unimpeachable, perfect, flawless"},
{withvery:"aggressive",novery:"forceful, overconfident, insistent, hardline"},
{withvery:"amazed",novery:"astounded, flabbergasted, astonished, shocked"},
{withvery:"angry",novery:"furious, irate, enraged, incensed, fuming, livid"},
{withvery:"anxious",novery:"dismayed, apprehensive, restless, fretful"},
{withvery:"aware",novery:"conscious, savvy, apprised, mindful, cognizant"},
{withvery:"bad",novery:"awful, deplorable, appalling, rotten, miserable"},
{withvery:"basic",novery:"rudimentary, primary, fundamental, simple"},
{withvery:"beautiful",novery:"gorgeous, stunning, exquisite, magnificent"},
{withvery:"bloody",novery:"gory, brutal, barbarous, savage, murderous"},
{withvery:"bony",novery:"skeletal, angular, spindly, gaunt, emaciated"},
{withvery:"boring",novery:"tedious, dreary, uninteresting, mind-numbing"},
{withvery:"bright",novery:"brilliant, dazzling, radiant, blinding, intense"},
{withvery:"capable",novery:"efficient, competent, adept, proficient, skillful"},
{withvery:"careful",novery:"meticulous, fastidious, precise, scrupulous"},
{withvery:"caring",novery:"compassionate, kind, attentive, sympathetic"},
{withvery:"civil",novery:"polite, courteous, respectful, cultured, mannerly"},
{withvery:"clean",novery:"spotless, immaculate, stainless, shining, hygienic"},
{withvery:"clear",novery:"transparent, sheer, translucent, glassy, crystal"},
{withvery:"clever",novery:"astute, brilliant, shrewd, ingenious, crafty, sharp"},
{withvery:"cold",novery:"frigid, bitter, icy, freezing, glacial, frosty, polar"},
{withvery:"colorful",novery:"vibrant, vivid, kaleidoscopic, variegated, vivid"},
{withvery:"competitive",novery:"ambitious, driven, cutthroat, bloodthirsty"},
{withvery:"concerned",novery:"worried, troubled, upset, distressed, agitated"},
{withvery:"confident",novery:"poised, cool, self-assured, self-reliant, secure"},
{withvery:"confused",novery:"baffled, befuddled, mystified, clueless, dazed"},
{withvery:"conscious",novery:"deliberate, intentional, premeditated, willful"},
{withvery:"consistent",novery:"constant, unfailing, uniform, harmonious, same"},
{withvery:"contrary",novery:"belligerent, argumentative, confrontational"},
{withvery:"conventional",novery:"conservative, common, predictable, unoriginal"},
{withvery:"corrupt",novery:"fraudulent, crooked, unethical, dishonest, rotten"},
{withvery:"creamy",novery:"velvety, buttery, rich, smooth, milky, greasy"},
{withvery:"creepy",novery:"unnerving, skin-crawling, spooky, sinister, weird"},
{withvery:"critical",novery:"vital, crucial, essential, indispensable, integral"},
{withvery:"crunchy",novery:"crispy, brittle, crackling, gravelly, crusty, gritty"},
{withvery:"curious",novery:"inquisitive, nosy, prying, snoopy, quizzical"},
{withvery:"cute",novery:"adorable, endearing, delightful, pretty, charming"},
{withvery:"dangerous",novery:"perilous, precarious, unsafe, treacherous, dicey"},
{withvery:"dark",novery:"black, inky, ebony, sooty, lightless, starless, unlit"},
{withvery:"decent",novery:"civilized, upright, courteous, respectable, noble"},
{withvery:"deep",novery:"abysmal, bottomless, cavernous, yawning, vast"},
{withvery:"deformed",novery:"twisted, contorted, misshapen, mutilated"},
{withvery:"delicate",novery:"subtle, slight, fragile, frail, flimsy, insubstantial"},
{withvery:"desperate",novery:"frantic, fraught, grave, serious, hopeless, dire"},
{withvery:"determined",novery:"resolute, adamant, obstinate, tenacious, dogged"},
{withvery:"different",novery:"unusual, distinctive, atypical, dissimilar, unlike"},
{withvery:"difficult",novery:"complicated, complex, demanding, arduous"},
{withvery:"dirty",novery:"filthy, foul, grimy, polluted, squalid, dilapidated"},
{withvery:"disagreeable",novery:"contrary, obnoxious, offensive, repugnant, rude"},
{withvery:"dismal",novery:"miserable, cheerless, depressing, morbid"},
{withvery:"distinct",novery:"clear, definite, patent, evident, apparent"},
{withvery:"dramatic",novery:"theatrical, histrionic, melodramatic, vivid"},
{withvery:"dry",novery:"arid, parched, sere, dehydrated, withered"},
{withvery:"dubious",novery:"suspicious, skeptical, cynical, unconvinced"},
{withvery:"eager",novery:"impatient, ardent, fervent, keen, earnest"},
{withvery:"easy",novery:"effortless, uncomplicated, unchallenging, simple"},
{withvery:"educational",novery:"enlightening, edifying, informative, revealing"},
{withvery:"efficient",novery:"competent, proficient, resourceful, able"},
{withvery:"embarrassed",novery:"mortified, humiliated, discomfited, ashamed"},
{withvery:"emotional",novery:"demonstrative, sensitive, temperamental"},
{withvery:"enthusiastic",novery:"zealous, eager, fervent, vehement, ebullient"},
{withvery:"exciting",novery:"exhilarating, electrifying, thrilling, breathtaking"},
{withvery:"expensive",novery:"costly, exorbitant, overpriced, extravagant"},
{withvery:"fair",novery:"equitable, impartial, neutral, nonpartisan"},
{withvery:"faithful",novery:"loyal, devoted, staunch, unwavering, stalwart"},
{withvery:"familiar",novery:"common, established, typical, traditional"},
{withvery:"famous",novery:"renowned, eminent, legendary, celebrated"},
{withvery:"far",novery:"distant, remote, isolated, secluded, extrasolar"},
{withvery:"fast",novery:"rapid, swift, fleet, blistering, supersonic"},
{withvery:"fat",novery:"obese, corpulent, rotund, blubbery, round"},
{withvery:"fertile",novery:"prolific, productive, fruitful, rich, lush, fecund"},
{withvery:"few",novery:"meager, scarce, scant, limited, negligible"},
{withvery:"fierce",novery:"vicious, ferocious, savage, keen, intense, feral"},
{withvery:"firm",novery:"solid, hard, rigid, set, frozen, unyielding"},
{withvery:"fizzy",novery:"effervescent, frothy, foamy, sudsy"},
{withvery:"fluffy",novery:"downy, fuzzy, fleecy, feathery, cottony"},
{withvery:"fond",novery:"devoted, attentive, enamored, doting"},
{withvery:"fragile",novery:"tenuous, unstable, precarious, frail, delicate"},
{withvery:"friendly",novery:"gregarious, outgoing, chummy, demonstrative"},
{withvery:"frustrating",novery:"exasperating, infuriating, disheartening, vexing"},
{withvery:"full",novery:"overflowing, bursting, crammed, packed, sated"},
{withvery:"funny",novery:"hilarious, hysterical, sidesplitting, rollicking"},
{withvery:"good",novery:"superb, superior, excellent, outstanding"},
{withvery:"graceful",novery:"flowing, supple, lithe, willowy, lissome"},
{withvery:"greedy",novery:"gluttonous, avaricious, materialistic, insatiable"},
{withvery:"hairy",novery:"hirsute, shaggy, furry, bushy, unshaven"},
{withvery:"happy",novery:"ecstatic, overjoyed, euphoric, blissful, elated"},
{withvery:"hard",novery:"inflexible, stony, steely, unyielding, tough, rigid"},
{withvery:"healthy",novery:"hale, hardy, flourishing, fit, robust, vigorous"},
{withvery:"heavy",novery:"leaden, ponderous, weighty, dense, hefty"},
{withvery:"helpful",novery:"supportive, obliging, accommodating, invaluable"},
{withvery:"honest",novery:"candid, sincere, authentic, forthright, frank"},
{withvery:"hot",novery:"burning, scalding, blistering, scorching, searing"},
{withvery:"hungry",novery:"starving, famished, ravenous, hollow, voracious"},
{withvery:"ill",novery:"infirm, bedridden, frail, terminal, incurable"},
{withvery:"immature",novery:"childish, infantile, naive, jejune, callow, green"},
{withvery:"immoral",novery:"depraved, decadent, debauched, iniquitous"},
{withvery:"important",novery:"crucial, vital, essential, paramount, imperative"},
{withvery:"impressive",novery:"extraordinary, remarkable, awe-inspiring"},
{withvery:"inebriated",novery:"intoxicated, drunk, soused, smashed, plastered"},
{withvery:"informal",novery:"casual, unceremonious, easygoing, simple"},
{withvery:"intelligent",novery:"brainy, clever, bright, gifted, intellectual, astute"},
{withvery:"intense",novery:"severe, extreme, fierce, overpowering, acute"},
{withvery:"interesting",novery:"fascinating, remarkable, riveting, compelling"},
{withvery:"jealous",novery:"envious, resentful, grudging, green, bitter"},
{withvery:"juicy",novery:"succulent, moist, ripe, luscious, fleshy, syrupy"},
{withvery:"large",novery:"huge, humongous, mammoth, gargantuan"},
{withvery:"lavish",novery:"excessive, opulent, posh, luxurious, sumptuous"},
{withvery:"light",novery:"buoyant, insubstantial, weightless, airy, ethereal"},
{withvery:"likely",novery:"expected, imminent, probable, unavoidable"},
{withvery:"lively",novery:"energetic, vivacious, exuberant, spirited"},
{withvery:"logical",novery:"rational, cogent, credible, consistent, sound"},
{withvery:"lonely",novery:"isolated, deserted, forlorn, solitary, abandoned"},
{withvery:"long",novery:"extended, extensive, interminable, protracted"},
{withvery:"loud",novery:"deafening, thunderous, booming, blaring"},
{withvery:"loved",novery:"adored, precious, cherished, revered, beloved"},
{withvery:"lucky",novery:"charmed, blessed, favored, fortunate, fluky"},
{withvery:"moody",novery:"morose, temperamental, unstable, changeable"},
{withvery:"much",novery:"plenty, oceans, heaps, scads, oodles, loads"},
{withvery:"much so",novery:"of course, okay, yes, absolutely, precisely"},
{withvery:"musical",novery:"melodic, melodious, harmonious, dulcet"},
{withvery:"near",novery:"handy, close-by, alongside, convenient, nearby"},
{withvery:"neat",novery:"orderly, tidy, uncluttered, immaculate, spotless"},
{withvery:"negative",novery:"pessimistic, defeatist, cynical, critical, fatalistic"},
{withvery:"new",novery:"novel, innovative, fresh, original, cutting-edge"},
{withvery:"nice",novery:"enjoyable, pleasant, agreeable, satisfying"},
{withvery:"numerous",novery:"abundant, copious, myriad, profuse"},
{withvery:"obvious",novery:"apparent, clear, evident, plain, visible"},
{withvery:"occasionally",novery:"seldom, rarely, infrequently, sporadically"},
{withvery:"old",novery:"grizzled, aged, hoary, ancient, grey, decrepit"},
{withvery:"opinionated",novery:"dogmatic, cocksure, biased, partisan"},
{withvery:"optimistic",novery:"enthusiastic, buoyant, encouraged, positive"},
{withvery:"painful",novery:"excruciating, agonizing, searing, unbearable"},
{withvery:"pale",novery:"white, pallid, ashen, sallow, colorless, pasty"},
{withvery:"persuasive",novery:"convincing, believable, compelling, charming"},
{withvery:"pleasant",novery:"satisfying, fulfilling, rewarding, gratifying"},
{withvery:"poor",novery:"destitute, indigent, penniless, impoverished"},
{withvery:"popular",novery:"trendy, fashionable, admired, prevalent"},
{withvery:"positive",novery:"optimistic, upbeat, affirmative, constructive"},
{withvery:"practical",novery:"realistic, sensible, functional, doable, viable"},
{withvery:"presentable",novery:"shipshape, well-groomed, tidy, personable"},
{withvery:"pure",novery:"unadulterated, wholesome, pristine, clean"},
{withvery:"quiet",novery:"noiseless, silent, still, hushed, soundless"},
{withvery:"rare",novery:"scarce, sparse, unique, exceptional, peerless"},
{withvery:"realistic",novery:"genuine, credible, authentic, rational, true"},
{withvery:"reasonable",novery:"equitable, judicious, sensible, practical, fair"},
{withvery:"recent",novery:"the latest, current, fresh, up-to-date"},
{withvery:"relevant",novery:"germane, pertinent, appropriate, significant"},
{withvery:"religious",novery:"spiritual, devout, pious, fervent, dedicated"},
{withvery:"responsible",novery:"dependable, conscientious, reliable, steadfast"},
{withvery:"risky",novery:"perilous, hazardous, treacherous, precarious"},
{withvery:"roomy",novery:"spacious, expansive, vast, palatial, commodious"},
{withvery:"rough",novery:"coarse, jagged, rugged, craggy, gritty, broken"},
{withvery:"rowdy",novery:"boisterous, disorderly, raucous, unruly, wild"},
{withvery:"rude",novery:"vulgar, insolent, offensive, derogatory, boorish"},
{withvery:"sad",novery:"desolate, disconsolate, wretched, dejected"},
{withvery:"safe",novery:"harmless, benign, secure, protected, sheltered"},
{withvery:"same",novery:"identical, matching, indistinguishable, exact"},
{withvery:"sassy",novery:"impertinent, cheeky, insolent, disrespectful"},
{withvery:"scared",novery:"terrified, petrified, terror-stricken, panicked"},
{withvery:"serious",novery:"solemn, somber, stern, dour, melancholy, grim"},
{withvery:"severe",novery:"acute, grave, critical, serious, brutal, relentless"},
{withvery:"sexy",novery:"seductive, steamy, provocative, erotic, sensual"},
{withvery:"shaky",novery:"tremulous, quaking, vibrating, unsteady"},
{withvery:"short",novery:"stubby, squat, dwarf, diminutive, petite"},
{withvery:"shy",novery:"timid, backward, introverted, withdrawn"},
{withvery:"significant",novery:"key, noteworthy, momentous, major, vital"},
{withvery:"silky",novery:"sleek, smooth, satiny, glossy, lustrous, shiny"},
{withvery:"similar",novery:"alike, akin, analogous, comparable, equivalent"},
{withvery:"simple",novery:"easy, straightforward, effortless, uncomplicated"},
{withvery:"slow",novery:"sluggish, sedate, plodding, creeping, snail-like"},
{withvery:"small",novery:"tiny, miniscule, infinitesimal, microscopic, wee"},
{withvery:"smooth",novery:"flat, glassy, polished, level, even, unblemished"},
{withvery:"soft",novery:"malleable, yielding, spongy, muted, doughy"},
{withvery:"sorry",novery:"remorseful, repentant, penitent, contrite"},
{withvery:"sour",novery:"acerbic, tart, vinegary, biting, harsh, caustic"},
{withvery:"specific",novery:"precise, exact, explicit, definite, unambiguous"},
{withvery:"stinky",novery:"putrid, fetid, rank, rancid, putrescent, noxious"},
{withvery:"strange",novery:"weird, eerie, bizarre, uncanny, peculiar, odd"},
{withvery:"strict",novery:"stern, austere, severe, rigorous, harsh, rigid"},
{withvery:"strong",novery:"muscular, brawny, rugged, powerful, tough"},
{withvery:"stupid",novery:"idiotic, dense, vacuous, ridiculous, inane"},
{withvery:"substantial",novery:"considerable, significant, extensive, ample"},
{withvery:"successful",novery:"lucrative, productive, thriving, prosperous"},
{withvery:"sudden",novery:"unexpected, abrupt, precipitous, unforeseen"},
{withvery:"suitable",novery:"appropriate, fitting, seemly, proper, correct"},
{withvery:"sure",novery:"positive, persuaded, certain, convinced, absolute"},
{withvery:"suspicious",novery:"skeptical, distrustful, wary, guarded, leery"},
{withvery:"sweet",novery:"syrupy, sugary, honeyed, cloying, candied"},
{withvery:"tactile",novery:"touchable, palpable, physical, perceptible"},
{withvery:"tall",novery:"towering, lofty, multistory, soaring, statuesque"},
{withvery:"tame",novery:"docile, submissive, meek, compliant, subdued"},
{withvery:"tasty",novery:"delectable, mouthwatering, scrumptious, divine"},
{withvery:"tempting",novery:"irresistible, enticing, tantalizing, alluring"},
{withvery:"tense",novery:"overwrought, rigid, taut, strained, agitated"},
{withvery:"terrible",novery:"dreadful, horrendous, horrific, shocking"},
{withvery:"thin",novery:"gaunt, scrawny, emaciated, haggard, skeletal"},
{withvery:"tired",novery:"exhausted, spent, frazzled, bushed, drained"},
{withvery:"traditional",novery:"conventional, established, customary, habitual"},
{withvery:"treacherous",novery:"traitorous, disloyal, unfaithful, perfidious"},
{withvery:"ugly",novery:"hideous, revolting, repugnant, grotesque"},
{withvery:"unfair",novery:"unjust, bigoted, prejudiced, inequitable"},
{withvery:"unlikely",novery:"improbable, implausible, doubtful, dubious"},
{withvery:"unusual",novery:"abnormal, extraordinary, uncommon, unique"},
{withvery:"useful",novery:"expedient, effective, nifty, handy, valuable"},
{withvery:"valuable",novery:"precious, priceless, treasured, inestimable"},
{withvery:"violent",novery:"abusive, savage, barbarous, cutthroat, cruel"},
{withvery:"visible",novery:"conspicuous, exposed, obvious, prominent"},
{withvery:"warm",novery:"stifling, hot, sultry, sweltering, oppressive"},
{withvery:"wary",novery:"skeptical, suspicious, leery, vigilant, distrustful"},
{withvery:"weak",novery:"feeble, frail, delicate, debilitated, fragile, sickly"},
{withvery:"well",novery:"superb, fine, fabulous, all right, okay, good"},
{withvery:"wet",novery:"saturated, soaked, waterlogged, sopping"},
{withvery:"wicked",novery:"evil, sinful, villainous, nefarious, fiendish"},
{withvery:"wide",novery:"vast, expansive, sweeping, boundless, distended"},
{withvery:"widespread",novery:"extensive, pervasive, prevalent, rampant"},
{withvery:"wild",novery:"untamed, feral, unmanageable, uncontrollable"},
{withvery:"windy",novery:"roaring, blustery, turbulent, howling, wild"},
{withvery:"wise",novery:"sagacious, sage, astute, enlightened, shrewd"},
{withvery:"worried",novery:"distressed, distraught, overwrought, upset"},
{withvery:"young",novery:"undeveloped, fledgling, immature, budding"},
{withvery:"zealous",novery:"driven, ambitious, motivated, passionate"}
];

/*
{withvery:"hard-to-find", novery:"rare"},
{withvery:"heavy", novery:"laden"},
{withvery:"high", novery:"soaring"},
{withvery:"hot", novery:"sweltering"},
{withvery:"huge", novery:"colossal"},
{withvery:"hungry", novery:"starving"},
{withvery:"hurt", novery:"battered"},
{withvery:"important", novery:"crucial"},
{withvery:"intelligent", novery:"brilliant"},
{withvery:"interesting", novery:"captivating"},
{withvery:"large", novery:"huge"},
{withvery:"lazy", novery:"indolent"},
{withvery:"little", novery:"tiny"},
{withvery:"long", novery:"extensive"},
{withvery:"long-term", novery:"enduring"},
{withvery:"loose", novery:"slack"},
{withvery:"loud", novery:"thunderous"},
{withvery:"mean", novery:"cruel"},
{withvery:"messy", novery:"laden"},
{withvery:"necessary", novery:"essential"},
{withvery:"nervous", novery:"apprehensive"},
{withvery:"nice", novery:"kind"},
{withvery:"cute", novery:"adorable"},
{withvery:"afraid", novery:"terrified"},
{withvery:"angry", novery:"furious"},
{withvery:"bad", novery:"atrocious"},
{withvery:"beautiful", novery:"exquisite"},
{withvery:"big", novery:"immense"},
{withvery:"bright", novery:"dazzling"},
{withvery:"capable", novery:"accomplished"},
{withvery:"clean", novery:"spotless"},
{withvery:"clever", novery:"brilliant"},
{withvery:"cold", novery:"freezing"},
{withvery:"conventional", novery:"conservative"},
{withvery:"dirty", novery:"squalid"},
{withvery:"dry", novery:"parched"},
{withvery:"eager", novery:"keen"},
{withvery:"fierce", novery:"ferocious"},
{withvery:"good", novery:"superb"},
{withvery:"happy", novery:"jubilant"},
{withvery:"lively", novery:"vivacious"},
{withvery:"loved", novery:"adored"},
{withvery:"neat", novery:"immaculate"},
{withvery:"old", novery:"ancient"},
{withvery:"poor", novery:"destitute"},
{withvery:"pretty", novery:"beautiful"},
{withvery:"quiet", novery:"silent"},
{withvery:"risky", novery:"perilous"},
{withvery:"roomy", novery:"spacious"},
{withvery:"rude", novery:"vulgar"},
{withvery:"serious", novery:"solemn"},
{withvery:"small", novery:"tiny"},
{withvery:"strong", novery:"unyielding"},
{withvery:"stupid", novery:"idiotic"},
{withvery:"tasty", novery:"delicious"},
{withvery:"thin", novery:"gaunt"},
{withvery:"tired", novery:"exhausted"},
{withvery:"ugly", novery:"hideous"},
{withvery:"valuable", novery:"precious"},
{withvery:"weak", novery:"feeble"},
{withvery:"wet", novery:"soaked"},
{withvery:"wicked", novery:"villainous"},
{withvery:"wise", novery:"sagacious"},
{withvery:"worried", novery:"anxious"},
{withvery:"fast", novery:"swift"}*/
</script>
<link rel="stylesheet" type="text/css" href="css.css">
<title>MyWord - Xu @ Project</title>
<div class="logo">Lexucon >> Farewell to VERY</div>
<div class="motto">Learn how to get rid of using very + adj</div>
<div class="menu">
<span><a href="index.php" target="_blank">Home</a></span>
<span><a href="admin.php" target="_blank">Admin</a></span>
</div>
<?php
include "init.php";
//here you will be challenged with two exercises: choose the correct meanings, and choose the correct words
//other features include: random word of the day, opt to show full list word...
?>

<script>
$(document).ready(function()
{
	//hover menu
	$(".menu>span").mouseover(function(){
		$(this).css("border-bottom-color","#0e6e9b");
		});
	$(".menu>span").mouseout(function(){
		$(this).css("border-bottom-color","#00436c");
		});
});
</script>

<script>
function findword(a)
{
for (t=0;t<=allword.length;t++)
{
key=allword[t].withvery;
if(key==a){rslt=allword[t].novery
$(".veryshow").html(rslt);
return true;}
else
{
	rslt="No result";
	$(".veryshow").html(rslt);
}
}
}
</script>
<script>
function listallword()
{
for (i=0;i<=allword.length;i++)
{
key=allword[i].withvery;
alt=allword[i].novery;
$("#allshow").append("<span class=\"singleword\">"+key+"</span><span class=\"singlemeaning\">"+alt+"</span><p></p><p></p><p></p>");
}
}
</script>
<script>
$(document).ready(listallword);
</script>
<script>
$(document).ready(function()
{
$("input").focus(function(){$(this).val("");});
$("input").focusout(function(){$(this).val("Enter your word here and press enter");});
$("input").on('keyup',function(evt) {
    if (evt.keyCode == 13) {
	//call for search
	findword($(this).val());
	     }
});
//3 rand number
//tạo array all number = length of word, shuffle, chọn 3 con đầu
num_arr = [];
for(i=0;i<=allword.length;i++)
{
	num_arr[i]=i;
}
num_arr.sort(function() { return 0.5 - Math.random() });
$("div[very_word_no~='1']").html(allword[num_arr[0]].withvery);
$("div[very_word_no~='2']").html(allword[num_arr[1]].withvery);
$("div[very_word_no~='3']").html(allword[num_arr[2]].withvery);
//their no-very peers
$("div[no_very_word_no~='1']").html(allword[num_arr[0]].novery);
$("div[no_very_word_no~='2']").html(allword[num_arr[1]].novery);
$("div[no_very_word_no~='3']").html(allword[num_arr[2]].novery);
});
</script>

<p></p>
<div style="display:table;">
<div class="searchform"><input class="verysearch" value="Enter your word here and press enter" id="key"></input></div>
<div class="veryshow"></div>
</div>
<p></p>
<p></p>
<table>
<tr>
<td><div very_word_no="1" class="veryword"></div><div no_very_word_no="1" class="noveryword"></div></td>
<td><div very_word_no="2" class="veryword"></div><div no_very_word_no="2" class="noveryword"></div></td>
<td><div very_word_no="3" class="veryword"></div><div no_very_word_no="3" class="noveryword"></div></td>
</tr>
</table>
Special thanks to http://kathysteinemann.com/Musings/how-to-avoid-very-in-writing/ for the database of 222 words
<h2>All words</h2>
<p></p>
<div id="allshow" style="overflow: scroll;height: 200px;"></div>
