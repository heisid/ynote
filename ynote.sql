-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: ynote
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `date_post` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `title_post` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (4,'2018-06-24 23:18:05',NULL,'First Test','<p>Let\'s see if it works</p>'),(7,'2018-06-25 20:01:33',NULL,'Merhaba - This week\'s language of the week: Turkish','<p style=\"box-sizing: border-box; margin: 0px 0px 0.357143em; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\"><a style=\"box-sizing: border-box; text-decoration-line: none; color: #7d5d8a; transition: color 0.15s ease; margin: 0px;\" href=\"https://en.wikipedia.org/wiki/Turkish_language\">Turkish</a>&nbsp;(T&uuml;rk&ccedil;e) also referred to as Istanbul Turkish, is the most widely spoken of the Turkic languages, with around 10&ndash;15 million native speakers in Southeast Europe (mostly in East and Western Thrace) and 60&ndash;65 million native speakers in Western Asia (mostly in Anatolia). Outside Turkey, significant smaller groups of speakers exist in Germany, Bulgaria, Macedonia, Northern Cyprus, Greece, the Caucasus, and other parts of Europe and Central Asia.</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">Turkish is a language I think is somewhat underappreciated. While it is notably complex grammatically, there are some other factors that make it attractive. It is very regular, the phonology is easy, and the extensive usage of roots to form new words make vocabulary much easier than it could be. It\'s also around the 22nd most spoken language in the world. Despite that, only around 3.4% of us were learning Turkish when we&nbsp;<a style=\"box-sizing: border-box; text-decoration-line: none; color: #7d5d8a; transition: color 0.15s ease; margin: 0px;\" href=\"https://docs.google.com/forms/d/1JTQXerGlVdPsC9vb0LoV9pWpfjZbxh-LTwDRZIPB6Cg/viewanalytics\">surveyed the sub</a>&nbsp;3 years ago. My hope here is to draw some people\'s interest, so please read on if you think you\'d consider it.</p>\r\n<h2 style=\"box-sizing: border-box; margin: 0.5em 0px 0.25em; padding: 0px; font-size: 1.28571em; color: #292f34; border: none; -webkit-font-smoothing: antialiased; font-weight: 500; line-height: 1.38889em; font-family: verdana, arial, helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-style: inherit; font-weight: 600; margin: 0px;\">Linguistics</span></h2>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">Turkish is a member of the&nbsp;<a style=\"box-sizing: border-box; text-decoration-line: none; color: #7d5d8a; transition: color 0.15s ease; margin-left: 0px; margin-right: 0px; margin-top: 0px;\" href=\"https://en.wikipedia.org/wiki/Oghuz_languages\">Oghuz</a>&nbsp;group of languages, a subgroup of the&nbsp;<a style=\"box-sizing: border-box; text-decoration-line: none; color: #7d5d8a; transition: color 0.15s ease; margin-left: 0px; margin-right: 0px; margin-bottom: 0px;\" href=\"https://en.wikipedia.org/wiki/Turkic_languages\">Turkic language family</a>. There is a high degree of mutual intelligibility between Turkish and the other Oghuz Turkic languages, including Azerbaijani, Turkmen, Qashqai, Gagauz, and Balkan Gagauz Turkish.</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">The distinctive characteristics of the Turkish language are vowel harmony and extensive agglutination. The basic word order of Turkish is subject&ndash;object&ndash;verb. Turkish has no noun classes or grammatical gender. The language has a strong T&ndash;V distinction and usage of honorifics. Turkish uses second-person pronouns that distinguish varying levels of politeness, social distance, age, courtesy or familiarity toward the addressee.</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-style: inherit; font-weight: 600; margin: 0px;\">Phonology</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">Turkish is very phonemic, meaning you can almost always understand how to pronounce a word by its spelling and spell a word by its pronunciation. As noted, Turkish has a system of vowel harmony that causes all vowels in most words to be either front or back. Front vowels are represented by dots above the letters or the letter e. This is why Turkish has the unique letter Ä±. It is the back version of the front vowel i.</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">Vowel harmony can be viewed as a process of assimilation, whereby following vowels take on the characteristics of the preceding vowel. It may be useful to think of Turkish vowels as two symmetrical sets: the a-undotted (a, Ä±, o, u) (back) and the e-dotted (e, i, &ouml;, &uuml;) vowels (front). This comes into play when you need to start conjugating things.</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">Grammatical affixes, of which Turkish has many, have \"a chameleon-like quality\", and obey one of the following patterns of vowel harmony:</p>\r\n<ul style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px 0px 0px 40px; list-style-position: initial; list-style-image: initial; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1em; line-height: 1.42857em;\">\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; font-size: 1em !important; line-height: 1.42857em;\">twofold (-e/-a): the locative case suffix, for example, is -de after front vowels and -da after back vowels. The notation -de&sup2; is a convenient shorthand for this pattern.</p>\r\n</li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 1em; line-height: 1.42857em;\">\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; font-size: 1em !important; line-height: 1.42857em;\">fourfold (-i/-Ä±/-&uuml;/-u): the genitive case suffix, for example, is -in or -Ä±n after unrounded vowels (front or back respectively); and -&uuml;n or -un after the corresponding rounded vowels.</p>\r\n</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">That is to say, the same suffix can be different based on the vowels the normal form of the word has, and will essentially take on the characteristics of that word based on how the vowels sound. When there are different \'types\' of vowel in a single root, the suffix will simply use the form of the last vowel.</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-style: inherit; font-weight: 600; margin: 0px;\">Lexicon</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">After the foundation of the modern state of Turkey and the script reform, the Turkish Language Association (TDK) was established in 1932 under the patronage of Mustafa Kemal Atat&uuml;rk, with the aim of conducting research on Turkish. One of the tasks of the newly established association was to initiate a language reform to replace loanwords of Arabic and Persian origin with Turkish equivalents. By banning the usage of imported words in the press, the association succeeded in removing several hundred foreign words from the language.</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">Turkish extensively uses agglutination to form new words from nouns and verbal stems. The majority of Turkish words originate from the application of derivative suffixes to a relatively small set of core vocabulary. This is an advantage for learners since learning the root form of a word can open up a wide range of vocabulary.</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-style: inherit; font-weight: 600; margin: 0px;\">Grammar</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">Turkish is an agglutinative language and frequently uses affixes, and specifically suffixes, or endings. One word can have many affixes and these can also be used to create new words, such as creating a verb from a noun, or a noun from a verbal root (see the section on Word formation). Most affixes indicate the grammatical function of the word. The only native prefixes are alliterative intensifying syllables used with adjectives or adverbs: for example sÄ±msÄ±cak (\"boiling hot\" &lt; sÄ±cak) and masmavi (\"bright blue\" &lt; mavi).</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">The extensive use of affixes can give rise to long words, e.g. &Ccedil;ekoslovakyalÄ±laÅŸtÄ±ramadÄ±klarÄ±mÄ±zdanmÄ±ÅŸsÄ±nÄ±zcasÄ±na, meaning \"In the manner of you being one of those that we apparently couldn\'t manage to convert to Czechoslovakian\". While this case is contrived, long words frequently occur in normal Turkish, as in this heading of a newspaper obituary column: BayramlaÅŸamadÄ±klarÄ±mÄ±z (Bayram [festival]-Recipr-Impot-Partic-Plur-PossPl1; \"Those of our number with whom we cannot exchange the season\'s greetings\"). Another example can be seen in the final word of this heading of the online Turkish Spelling Guide (Ä°ml&acirc; KÄ±lavuzu): Dilde birlik, ulusal birliÄŸin vazge&ccedil;ilemezlerindendir (\"Unity in language is among the indispensables [dispense-Pass-Impot-Plur-PossS3-Abl-Copula] of national unity ~ Linguistic unity is a sine qua non of national unity\").</p>\r\n<p style=\"box-sizing: border-box; margin: 0.357143em 0px; padding: 0px; line-height: 1.42857em; color: #292f34; font-family: verdana, arial, helvetica, sans-serif;\">There are six noun cases in Turkish, with all the endings following vowel harmony. The plural marker -ler immediately follows the noun before any case or other affixes (e.g. k&ouml;ylerin \"of the villages\").</p>'),(8,'2018-06-27 11:45:24',NULL,'Another Test Posting','<p>It&#39;s&nbsp;<em>June 27th, 2018</em>. People are supposed to vote for&nbsp;the election. But I don&#39;t for sensible reason. My hometown is hundred kilometres away from Jakarta, a big no. I think I&#39;m gonna finish this little project today.</p>\r\n\r\n<p>At first, this project used tinymce as its editor (you can see in git log), but then I moved to ckeditor. Despite its &#39;tiny&#39; size, setting up tinymce is a bit complicated to me, especially for editing mode. You know, for editing you have to put previous content to textarea. But for this task, tinymce showed unexpected behavior. I have read the documentation though, but no luck. I&#39;ve googled too, and it gave me some link to stackoverflow as usual, but unfortunatelly, all of them was old posts. They used old version so it was not applicable anymore.</p>\r\n\r\n<p>I&#39;m happy with ckeditor, quite simple and has more complete tools.</p>\r\n'),(9,'2018-06-27 18:31:00','2018-06-28 18:27:28','Once More','<p>Once more. I&#39;m testing if the new combined new-post and edit page works. Edited</p>\r\n');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_tags`
--

DROP TABLE IF EXISTS `posts_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_tags` (
  `id_post` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id_post`,`id_tag`),
  KEY `id_post` (`id_post`),
  KEY `id_tag` (`id_tag`),
  CONSTRAINT `posts_tags_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`),
  CONSTRAINT `posts_tags_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_tags`
--

LOCK TABLES `posts_tags` WRITE;
/*!40000 ALTER TABLE `posts_tags` DISABLE KEYS */;
INSERT INTO `posts_tags` VALUES (4,1);
/*!40000 ALTER TABLE `posts_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'test');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-29 18:49:29
