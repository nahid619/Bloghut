-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 06:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(1, 'Food', 'Tasty and Tasty'),
(4, 'Art', 'abc'),
(5, 'Wild Life', 'abc'),
(6, 'science and technology', 'abc'),
(7, 'Uncategorized', 'abc'),
(8, 'Fruits', 'All types of fruits'),
(9, 'Songs', 'Details about music and its origin'),
(10, 'Game', 'videos games, arcade games');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `author_id` int(11) UNSIGNED DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `thumbnail`, `date_time`, `category_id`, `author_id`, `is_featured`) VALUES
(10, 'AR technology', '    The world-famous search engine Google is now bringing Augmented Reality (AR) technology to its messages. As a result, Android users can send fireworks effects, balloons, animations to each other using AR technology. This feature is already available in the popular messaging app Snapchat. Similarly, it is reported that this new feature is going to be added to the Android Messages texting app. The details of these new features have been seen in a recently published video on this issue.\r\n\r\nA user named XDA Developer detailed the new features that will be added to the Messages app using AR effects. The video shows users using the AR effects added to the Android messaging app to perform several animations including fireworks effects, fairy special effects, flying balloons.\r\n\r\nHowever, it is not clear from the video or the news that Google is really adding this test to Android messaging. Google has not given any official statement on the matter. Google has been asked about this but nothing is known.\r\n\r\nThe inclusion of AR technology in messaging apps is currently a hot topic. Various messaging apps are also doing research on this. The name of Google is also going to be added to this list. The benefits that may have initially can be seen in the video, but there is no way to understand exactly what level the matter is now. However, if the issue is added, it is believed to be very good for Android users. As a competitor of Google, Apple&#039;s iPhone already has such advantages in iMessage. Now the Android messaging app will take a step forward when the AR feature is added to Android.\r\n\r\nNow users have to wait for this new facility. Very soon maybe the update with this facility will come to your smartphone.\r\n    ', '1670177891abcd.jpg', '2022-12-03 11:48:41', 6, 4, 1),
(11, 'Black Forest Cake Recipe', '1 tinMILKMAID\r\n1&frac34; cup (175 gms)Maida (All-purpose Flour)\r\n3-4 heaped tbsp (25gms)Cocoa Powder\r\n1 tspBaking Powder\r\n1 tspSoda Bicarbonate\r\n100 gmsButter\r\n1 tspVanilla Essence\r\n200 mlAerated Soda\r\n1small Tin Cherries\r\n200 gmsFresh Cream\r\n2 tspIcing Sugar/Powdered Sugar\r\n50 gmsMilk Chocolate\r\n\r\nGrease an 8&rdquo; baking tin and dust it with flour. Pre heat the oven to 180o C. Sieve together maida, cocoa powder, baking powder, and soda bicarbonate.\r\nSoften butter (DO NOT MELT), add it to MILKMAID, and beat well. Now add vanilla essence. Add maida mixture and aerated soda alternately to the batter till all the maida and soda are used up.\r\nPour the batter into the baking tin and bake in the preheated oven for 45-50 minutes or till the toothpick inserted in the center of the cake comes out clean. Remove from oven, cool for a while. Loosen sides of cake, using a knife if necessary. Turnout over a wire rack or plate and cool slightly before cutting horizontally into 2.\r\nDrain &amp; destone cherries, soak both cake halves with cherry syrup. Whip cream and sugar till light and fluffy, sandwich the two layers of cake with whipped cream and chopped cherries. Top with whipped cream, cherries and grated milk chocolate. Chill and serve.\r\nTips\r\n\r\nUndermixing and overmixing the black forest gateau should be avoided at all costs. Overmixing the batter will deflate the essential air, resulting in dense cakes. Don&#039;t undermix, on the other hand. You must fully incorporate all of the ingredients.\r\nDo not open the oven door frequently as this will result in a fluctuating oven temperature, resulting in uneven baking and cracking.\r\nFAQs\r\n\r\n1.  Is it necessary to refrigerate my black forest gateau?\r\nMost cakes can be stored at room temperature for two days. When in doubt, always refrigerate. They last longer, especially if the weather is too humid or your kitchen gets too hot.\r\n\r\n2.  When frosting the black forest cake, how do you avoid it from crumbling?\r\nBefore frosting the black forest cake, make sure it has totally cooled. Freezing the cake layers before frosting is a great approach to avoid crumbling. Crumb coating, or frosting the black forest cake in a thin layer, captures crumbs and keeps it moist.', '1670179337BlackForest-Cake.png', '2022-12-04 18:42:17', 1, 4, 0),
(12, 'See You Again Lyrics : song by Wiz Khalifa', 'Lyrics\r\nIt&#039;s been a long day without you, my friend\r\nAnd I&#039;ll tell you all about it when I see you again\r\nWe&#039;ve come a long way from where we began\r\nOh, I&#039;ll tell you all about it when I see you again\r\nWhen I see you again\r\nDamn, who knew?\r\nAll the planes we flew, good things we been through\r\nThat I&#039;d be standing right here talking to you\r\n&#039;Bout another path, I know we loved to hit the road and laugh\r\nBut something told me that it wouldn&#039;t last\r\nHad to switch up, look at things different, see the bigger picture\r\nThose were the days, hard work forever pays\r\nNow I see you in a better place (see you in a better place)\r\nUh\r\nHow can we not talk about family when family&#039;s all that we got?\r\nEverything I went through, you were standing there by my side\r\nAnd now you gon&#039; be with me for the last ride\r\nIt&#039;s been a long day without you, my friend\r\nAnd I&#039;ll tell you all about it when I see you again (I&#039;ll see you again)\r\nWe&#039;ve come a long way (yeah, we came a long way)\r\nFrom where we began (you know we started)\r\nOh, I&#039;ll tell you all about it when I see you again (I&#039;ll tell you)\r\nWhen I see you again\r\nFirst, you both go out your way and the vibe is feeling strong\r\nAnd what&#039;s small turned to a friendship, a friendship turned to a bond\r\nAnd that bond will never be broken, the love will never get lost\r\n(The love will never get lost)\r\nAnd when brotherhood come first, then the line will never be crossed\r\nEstablished it on our own when that line had to be drawn\r\nAnd that line is what we reached, so remember me when I&#039;m gone\r\n(Remember me when I&#039;m gone)\r\nHow can we not talk about family when family&#039;s all that we got?\r\nEverything I went through you were standing there by my side\r\nAnd now you gon&#039; be with me for the last ride\r\nSo let the light guide your way, yeah\r\nHold every memory as you go\r\nAnd every road you take\r\nWill always lead you home, home\r\nIt&#039;s been a long day without you, my friend\r\nAnd I&#039;ll tell you all about it when I see you again\r\nWe&#039;ve come a long way from where we began\r\nOh, I&#039;ll tell you all about it when I see you again\r\nWhen I see you again\r\nWhen I see you again (yeah, uh)\r\nSee you again (yeah, yeah, yeah)\r\nWhen I see you again', '1670179720maxresdefault.jpg', '2022-12-04 18:48:40', 9, 4, 0),
(13, 'Shape Of You Lyrics &ndash; ED SHEERAN &ndash; With Video &ndash; Jennie Pegouskie', ' The club isn&rsquo;t the best place to find a lover\r\nSo the bar is where I go\r\nMe and my friends at the table doing shots\r\nDrinking fast and then we talk slow (mmmm)\r\nYou come over and start up a conversation with just me\r\nAnd trust me I&rsquo;ll give it a chance now\r\nTake my hand, stop\r\nPut Van The Man on the jukebox\r\nAnd then we start to dance\r\nAnd now I&rsquo;m singing like\r\n\r\n\r\nGirl, you know I want your love\r\nYour love was handmade for somebody like me\r\nCome on now, follow my lead\r\nI may be crazy, don&rsquo;t mind me\r\nSay, boy, let&rsquo;s not talk too much\r\nGrab on my waist and put that body on me\r\nCome on now, follow my lead\r\nCome, come on now, follow my lead (mmmm)\r\n\r\nI&rsquo;m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI&rsquo;m in love with your body\r\nAnd last night you were in my room\r\nAnd now my bedsheets smell like you\r\nEvery day discovering something brand new\r\nI&rsquo;m in love with your body\r\nOh I oh I oh I oh I\r\nI&rsquo;m in love with your body\r\nOh I oh I oh I oh I\r\nI&rsquo;m in love with your body\r\nOh I oh I oh I oh I\r\nI&rsquo;m in love with your body\r\nEvery day discovering something brand new\r\nI&rsquo;m in love with the shape of you\r\n\r\n\r\nOne week in we let the story begin\r\nWe&rsquo;re going out on our first date (mmmm)\r\nYou and me are thrifty\r\nSo go all you can eat\r\nFill up your bag and I fill up a plate\r\nWe talk for hours and hours about the sweet and the sour\r\nAnd how your family is doing okay\r\nLeave and get in a taxi, then kiss in the backseat\r\nTell the driver make the radio play\r\nAnd I&rsquo;m singing like\r\n\r\nGirl, you know I want your love\r\nYour love was handmade for somebody like me\r\nCome on now, follow my lead\r\nI may be crazy, don&rsquo;t mind me\r\nSay, boy, let&rsquo;s not talk too much\r\nGrab on my waist and put that body on me\r\nCome on now, follow my lead\r\nCome, come on now, follow my lead\r\n\r\nI&rsquo;m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI&rsquo;m in love with your body\r\nAnd last night you were in my room\r\nAnd now my bedsheets smell like you\r\nEvery day discovering something brand new\r\nI&rsquo;m in love with your body\r\nOh I oh I oh I oh I\r\nI&rsquo;m in love with your body\r\nOh I oh I oh I oh I\r\nI&rsquo;m in love with your body\r\nOh I oh I oh I oh I\r\nI&rsquo;m in love with your body\r\nEvery day discovering something brand new\r\nI&rsquo;m in love with the shape of you\r\n\r\n\r\n\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\n\r\nI&rsquo;m in love with the shape of you\r\nWe push and pull like a magnet do\r\nAlthough my heart is falling too\r\nI&rsquo;m in love with your body\r\nLast night you were in my room\r\nAnd now my bedsheets smell like you\r\nEvery day discovering something brand new\r\nI&rsquo;m in love with your body\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI&rsquo;m in love with your body\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI&rsquo;m in love with your body\r\nCome on, be my baby, come on\r\nCome on, be my baby, come on\r\nI&rsquo;m in love with your body\r\nEvery day discovering something brand new\r\nI&rsquo;m in love with the shape of you ', '1670180090Ed-Sheeran-Shape-of-You-lyrics.jpg', '2022-12-04 18:54:50', 9, 5, 0),
(14, 'Kiwano', 'Kiwano (Cucumis metuliferus), also known as horned melon, is a sweet tropical fruit. It is an annual vine in the cucumber and melon family, Cucurbitaceae. It is also called &quot;horned melon&quot; since its fruit has horn-like spines. Ripe fruit has orange skin and lime green, jelly-like flesh. Kiwano is native to Sub-Saharan Africa. It is now grown in the United States, Portugal, Italy, Germany, Chile, Australia, and New Zealand.\r\n\r\nKiwano is a traditional food plant in Africa. Along with the Gemsbok cucumber (Acanthosicyos naudinianus) and Tsamma (Citron melon), it is one of the few sources of water during the dry season in the Kalahari Desert. In northern Zimbabwe, it is called gaka or gakachika. There it is primarily used as a snack or salad, and rarely for decoration.', '1670180420kiwano.jpg', '2022-12-04 19:00:20', 8, 5, 0),
(15, 'The Sundarban', 'Brief synthesis\r\n\r\nThe Sundarbans Reserve Forest (SRF), located in the south-west of Bangladesh between the river Baleswar in the East and the Harinbanga in the West, adjoining to the Bay of Bengal, is the largest contiguous mangrove forest in the world. Lying between latitude 21&deg; 27&prime; 30&Prime; and 22&deg; 30&prime; 00&Prime; North and longitude 89&deg; 02&prime; 00&Prime; and 90&deg; 00&prime; 00&Prime; East and with a total area of 10,000 km2, 60% of the property lies in Bangladesh and the rest in India. The land area, including exposed sandbars, occupies 414,259 ha (70%) with water bodies covering 187,413 ha (30%).\r\n\r\nThe three wildlife sanctuaries in the south cover an area of 139,700 ha and are considered core breeding areas for a number of endangered species. Situated in a unique bioclimatic zone within a typical geographical situation in the coastal region of the Bay of Bengal, it is a landmark of ancient heritage of mythological and historical events. Bestowed with magnificent scenic beauty and natural resources, it is internationally recognized for its high biodiversity of mangrove flora and fauna both on land and water.\r\n\r\nThe immense tidal mangrove forests of Bangladeshs&rsquo; Sundarbans Forest Reserve, is in reality a mosaic of islands of different shapes and sizes, perennially washed by brackish water shrilling in and around the endless and mind-boggling labyrinths of water channels. The site supports exceptional biodiversity in its terrestrial, aquatic and marine habitats; ranging from micro to macro flora and fauna. The Sundarbans is of universal importance for globally endangered species including the Royal Bengal Tiger, Ganges and Irawadi dolphins, estuarine crocodiles and the critically endangered endemic river terrapin (Batagur baska).  It is the only mangrove habitat in the world for Panthera tigris tigris species.\r\n\r\nCriterion (ix): The Sundarbans provides a significant example of on-going ecological processes as it represents the process of delta formation and the subsequent colonization of the newly formed deltaic islands and associated mangrove communities. These processes include monsoon rains, flooding, delta formation, tidal influence and plant colonization. As part of the world&rsquo;s largest delta, formed from sediments deposited by three great rivers; the Ganges, Brahmaputra and Meghna, and covering the Bengal Basin, the land has been moulded by tidal action, resulting in a distinctive physiology.\r\n\r\nCriterion (x): One of the largest remaining areas of mangroves in the world, the Sundarbans supports an exceptional level of biodiversity in both the terrestrial and marine environments, including significant populations of globally endangered cat species, such as the Royal Bengal Tiger. Population censuses of Royal Bengal Tigers estimate a population of between 400 to 450 individuals, a higher density than any other population of tigers in the world.\r\n\r\nThe property is the only remaining habitat in the lower Bengal Basin for a wide variety of faunal species. Its exceptional biodiversity is expressed in a wide range of flora; 334 plant species belonging to 245 genera and 75 families, 165 algae and 13 orchid species. It is also rich in fauna with 693 species of wildlife which includes; 49 mammals, 59 reptiles, 8 amphibians, 210 white fishes, 24 shrimps, 14 crabs and 43 mollusks species. The varied and colourful bird-life found along the waterways of the property is one of its greatest attractions, including 315 species of waterfowl, raptors and forest birds including nine species of kingfisher and the magnificent white-bellied sea eagle.\r\n\r\nIntegrity\r\n\r\nThe Sundarbans is the biggest delta, back water and tidal phenomenon of the region and thus provides diverse habitats for several hundreds of aquatic, terrestrial and amphibian species. The property is of sufficient size to adequately represent its considerably high floral and faunal diversity with all key values included within the boundaries. The site includes the entire landscape of mangrove habitats with an adequate surrounding area of aquatic (both marine and freshwater) and terrestrial habitats, and thus all the areas essential for the long term conservation of the Sundarbans and its rich and distinct biodiversity\r\n\r\nThe World Heritage property is comprised of three wildlife sanctuaries which form the core breeding area of a number of species of endangered wildlife. Areas of unique natural beauty, ethno botanical interest, special marine faunal interest, rivers, creeks, islands, swamps, estuaries, mud flats, and tidal flats are also included in the property. The boundaries of the property protect all major mangrove vegetation types, areas of high floral and faunal values and important bird areas. The integrity of the property is further enhanced by terrestrial and aquatic buffer zones that surround, but are not part of the inscribed property.\r\n\r\nNatural calamities such as cyclones, have always posed threats on the values of the property and along with saline water intrusion and siltation, remain potential threats to the attributes. Cyclones and tidal waves cause some damage to the forest along the sea-land interface and have previoulsy caused occasional considerable mortality among some species of fauna such as the spotted deer. Over exploitation of both timber resources and fauna, illegal hanting and trapping, and agricultural encroachment also pose serious threats to the values of the property and its overall integrity.\r\n\r\nProtection and management requirements\r\n\r\nThe property is composed of three wildlife sanctuaries and has a history of effective national legal protection for its land, forest and aquatic environment since the early 19th century. All three wildlife sanctuaries were established in 1977 under the Bangladesh Wildlife (Preservation) (Amendment) Act, 1974, having first been gazetted as forest reserves in 1878. Along with the Forest Act, 1927, the Bangladesh Wildlife (Preservation) (Amendment) Act 1974, control activities such as entry, movement, fishing, hunting and extraction of forest produces. A number of field stations established within Sundarbans West assist in providing facilities for management staff. There are no recognised local rights within the reserved forest with entry and collection of forest products subject to permits issued by the Forest Department.\r\n\r\nThe property is currently well managed and regularly monitored by established management norms, regular staff and individual administrative units. The key objective of management is to manage the property to retain the biodiversity, aesthetic values and integrity. A delicate balance is needed to maintain and facilitate the ecological process of the property on a sustainable basis. Another key management priority is the maintenance of ongoing ecological and hydrological process which could otherwise be threatened by ongoing developmental activities outside the property. Subject to a series of successively more comprehensive management plans since its declaration as reserved forest, a focus point of many of these plans is the management of tigers, together with other widlife, as an integral part of forest management that ensures the sustainable harvesting of forest products while maintaining the coastal zone in a way that meets the needs of the local human population. The working plans for the Sundarbans demonstrate a progressive increase in the understanding of the management requirements and the complexity of prescriptions made to meet them.\r\n\r\nConsiderable research has been conducted on the Sundarbans wildlife and ecosystem. International input and assistance from WWF and the National Zoological Park, the Smithsonian Institution as well as other organisations has assisted with the development of working plans for the property, focusing on conservation and management of wildlife.\r\n\r\nThe Sundarbans provides sustainable livelihoods for millions of people in the vicinity of the site and acts as a shelter belt to protect the people from storms, cyclones, tidal surges, sea water seepage and intrusion. The area provides livelihood in certain seasons for large numbers of people living in small villages surrounding the property, working variously as wood-cutters, fisherman, honey gatherers, leaves and grass gatherers.\r\n\r\nTourism numbers remain relatively low due to the difficult access, arranging transport and a lack of facilities including suitable accommodation. Mass tourism and its impacts are unlikely to affect the values of the property. While the legal protection afforded the property prohibit a number of activities within the boundaries illegal hunting, timber extraction and agricultural encroachment pose potential threats to the values of the property. Storms, cyclones and tidal surges up to 7.5 m high, while features of the areas, also pose a potential threat with possible increased frequency as a result of climate change.', '1670181110maitheli-maitra-nZ2cEh8Qzcg-unsplash (1).jpg', '2022-12-04 19:11:50', 5, 5, 0),
(16, 'Mona Lisa', ' The Mona Lisa (/ˌmoʊnə ˈliːsə/ MOH-nə LEE-sə; Italian: Gioconda [dʒoˈkonda] or Monna Lisa [ˈmɔnna ˈliːza]; French: Joconde [ʒɔkɔ̃d]) is a half-length portrait painting by Italian artist Leonardo da Vinci. Considered an archetypal masterpiece of the Italian Renaissance,[4][5] it has been described as &quot;the best known, the most visited, the most written about, the most sung about, the most parodied work of art in the world&quot;.[6] The painting&#039;s novel qualities include the subject&#039;s enigmatic expression,[7] the monumentality of the composition, the subtle modelling of forms, and the atmospheric illusionism.[8]\r\n\r\nThe painting has been definitively identified to depict Italian noblewoman Lisa Gherardini,[9] the wife of Francesco del Giocondo. It is painted in oil on a white Lombardy poplar panel. Leonardo never gave the painting to the Giocondo family, and later it is believed he left it in his will to his favored apprentice Sala&igrave;.[10] It had been believed to have been painted between 1503 and 1506; however, Leonardo may have continued working on it as late as 1517. It was acquired by King Francis I of France and is now the property of the French Republic. It has been on permanent display at the Louvre in Paris since 1797.[11]\r\n\r\nThe painting&#039;s global fame and popularity stem from its 1911 theft by Vincenzo Peruggia, who attributed his actions to Italian patriotism &ndash; a belief that the painting should belong to Italy. The theft and subsequent recovery in 1914 generated unprecedented publicity for an art theft, and led to the publication of numerous cultural depictions such as the 1915 opera Mona Lisa, two early 1930s films about the theft (The Theft of the Mona Lisa and Ars&egrave;ne Lupin) and the popular song Mona Lisa recorded by Nat King Cole &ndash; one of the most successful songs of the 1950s.[12]\r\n\r\nThe Mona Lisa is one of the most valuable paintings in the world. It holds the Guinness World Record for the highest-known painting insurance valuation in history at US$100 million in 1962[13] (equivalent to $870 million in 2021). ', '1670182983Mona-Lisa-oil-wood-panel-Leonardo-da.jpg', '2022-12-04 19:17:52', 1, 5, 0),
(17, 'Asus-the change in tech', 'Headquartered in Taiwan, Asus is a computer hardware and consumer electronics company that was established in 1989 by T H Tung, Ted Hsu, Wayne Hsieh and M T Liao &mdash; all hardware engineers at Acer. The company began with computer motherboards but now offers desktop computers, notebooks, smartphones, networking equipment, monitors, projectors, graphic cards, optical storage devices, Wi-Fi routers, servers, workstations and tablets. It is also developing virtual and augmented reality products, internet of things (IoT) devices, and robotic technologies. In 2018, Asus introduced Zenbo, a smart home robot designed to provide assistance, entertainment, and companionship to families.\r\n \r\nIn 1995, six years after it was incorporated, Asus became the world&rsquo;s leading motherboard maker. It is Asus that is credited with making Taiwan the leader it is in the global computer hardware business. In 1996, the company went public and started trading on the Taiwan Stock Exchange. In 2000, it established its service centres in the Netherland, China, US, Czech Republic, Australia and Japan. Subsequently, in 2006, the company also established its sub-brand Republic of Gamers (ROG) to design and develop products for gamers. Under the sub-brand, the company launched its first gaming-grade motherboard ROG Crosshair.\r\n \r\nIn 2008, Asus restructured its operations by splitting into three independent companies &mdash; Asus, Pegatron and Unihan Corporation. Asus focused on applied first-party branded computers and electronics; Pegatron became an original equipment manufacturer of motherboards and components. And Unihan Corporation focused on non-PC manufacturing such as cases and moldings. In the last leg of the same year, the company became a member of the Open Handset Alliance to deploy compatible Android devices.\r\n \r\nAsus&rsquo; first-generation Android operating system-based smartphones were launched in 2014. These smartphones were powered by Intel processors, not the ARM processors which most other Android smartphones used. The company&rsquo;s Zenfone line-up of smartphones faced a legal hurdle in India and the Delhi High Court in 2019 directed it to stop selling its smartphones under Zenfone brand. This forced the company to launch its 2019 flagship smartphone the Asus Zenfone 6 as Asus 6z in India.', '1670182009glowing-asus-rog-logo-gaming-laptop-miercurea-ciuc-romania-august-155994881.jpg', '2022-12-04 19:26:49', 6, 7, 0),
(18, 'Valorant', 'Wondering why social media and web portals are abuzz with news about a video game called Valorant? It is because the game has come out of closed beta and is now available to gamers across the world including those in India. Until now, it was available to only a select few who had access to the closed beta. This means anyone with a gaming device that supports the game can download and play it right away. Since it is an online multiplayer game, it will require uninterrupted internet access. Built on Unreal Engine, the game has been developed and published by Riot Games, a California based gaming company known for games like League of Legends.\r\n\r\nLike most online multiplayer games such as PUBG, CS GO and Fortnite, Valorant is also free to play. The game is currently available only on Windows PC. However, reports suggest the game could come to PS4, Xbox One and Nintendo Switch, but not anytime soon. As of now Valorant is only available on playvalorant.com. So, you won&rsquo;t find it on Steam or Epic Games store.\r\n\r\nWhat are the rules of the game?\r\n\r\nValorant is a tactical shooting game involving two teams with 5 players in each team. Every player can sign in and play remotely from anywhere in the world. Every game has 25 rounds and the team that wins 13 of them first wins the game. Players can choose their in-game characters called agents at the start of the game. Players can buy abilities and weapons at the start of the game.\r\n\r\nCan your PC handle it?\r\n\r\nThe size of the download file for Valorant is just 7.3GB, which is quite small in comparison to the file size of many of the modern day PC games. In terms of hardware requirements, minimum specs required for gaming at 30 FPS (frames per second) is Intel Core 2 Duo E8400 CPU and Intel HD4000 GPU. However, for a enjoyable gaming experience at 60FPS Riot Games recommends, no less than Intel Core i3-4150 CPU and Nvidia GeForce GT 730 GPU. For the best possible experience at 144 and higher FPS, players should at least have Intel Core i5-4460 clocking at 3.2GHz and Nvidia GTX 1050Ti.\r\n\r\nHow does it compare with PUBG or CS:GO?\r\n\r\nIn comparison to other popular online multiplayer games, Valorant has a lot more in common with the likes of CS:GO, rather than PUBG and Fortnite. Similar to CS: GO, here one team attacks while the other defends. The defensive team plants a bomb and then tries to stop the offensive team from defusing it. Teams can swap between attacks and defence after 3 rounds.\r\n\r\nHow will Riot Games ensure fairplay?\r\n\r\nTo uphold the competitive integrity of the game and prevent cheating, Riot Games&rsquo; anti cheat system called Vanguard comes into action during gameplay. It can prevent players from using speed hacks (which allows players to move faster than others) and wall hacks (when players can see opponents through walls). The developer is working on adding aim locks (it locks aim at enemy by itself) and trigger bots (automatically shoots at an enemy) to Vanguard soon.\r\n\r\n\r\n', '1670182846stretched-1920-1080-1081832.jpg', '2022-12-04 19:40:46', 10, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `avatar`, `is_admin`) VALUES
(4, 'Nahid', 'Hasan', 'admin', 'nh0555024@gmail.com', '12345678', '1669918045nahid.jpeg', 1),
(5, 'Sayeed ', 'hasan', 'super admin', 'sayeed@gmail.com', '123456789', '1669985330unnamed-min.jpg', 0),
(7, 'Epic', 'Hasan', 'Zygarde', 'abc@gmail.com', '12345678', '16701815761008192.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_blog_category` (`category_id`),
  ADD KEY `FK_blog_author` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_blog_author` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_blog_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
