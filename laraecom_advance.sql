-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 07:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraecom_advance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_user_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `brand`, `category`, `product`, `slider`, `coupons`, `shipping`, `blog`, `setting`, `return_order`, `review`, `stock`, `orders`, `reports`, `all_user`, `admin_user_role`, `type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin2', 'admin@gmail.com', '2021-05-01 04:31:40', '$2y$10$GL5NKxSES2jIITELtTqGO.uptSEGKZSY0oQwsKCkYnzI2UFIq2A/O', '7845124580', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, '90GnFsue0avBcqBsRvGERBzhKrFuucWG0qInmmOgBQJZBwUKZrkb8PrZ4Ahw', NULL, 'upload/admin_images/1702199435964462.png', '2021-05-01 04:31:40', '2021-06-10 11:21:23'),
(7, 'Hello', 'hello@gmail.com', NULL, '$2y$10$i4FConSD/SRm00EoPUtE5u9gej8AXiuTsY9C0n6zhd/vhg6MTffCC', '4785411122', NULL, '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1702210933876905.png', '2021-06-10 14:27:06', '2021-06-10 14:27:06'),
(8, 'Test', 'test@gmail.com', NULL, '$2y$10$YVL4t4lRAiSCPCoYgnVKUOZN248lmZX5r5nKFFgsc3WQD3UpoF9FG', '2154698877', '1', NULL, NULL, NULL, NULL, '1', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1702211229088098.png', '2021-06-10 14:28:50', '2021-06-10 15:01:22'),
(9, 'Arijit', 'arijit@gmail.com', NULL, '$2y$10$VgDXGvowaM12VEHruhsinOMf0ox2ChJ7lucNQl4D0DTn4HUZknsJO', '5874441240', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, '1', NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1703565581243750.png', '2021-06-25 13:15:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `blog_post_title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_title_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_title_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_slug_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_details_ben` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_post_details_hin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `blog_category_id`, `blog_post_title_en`, `blog_post_title_ben`, `blog_post_title_hin`, `blog_post_slug_en`, `blog_post_slug_ben`, `blog_post_slug_hin`, `blog_post_image`, `blog_post_details_en`, `blog_post_details_ben`, `blog_post_details_hin`, `created_at`, `updated_at`) VALUES
(3, 6, 'Managed Power Services: The Next Wave Of Growth Opportunity', 'পরিচালিত শক্তি পরিষেবাগুলি: বৃদ্ধির সুযোগের পরবর্তী তরঙ্গ', 'प्रबंधित बिजली सेवाएं: विकास के अवसर की अगली लहर', 'managed-power-services:-the-next-wave-of-growth-opportunity', 'পরিচালিত-শক্তি-পরিষেবাগুলি:-বৃদ্ধির-সুযোগের-পরবর্তী-তরঙ্গ', 'प्रबंधित-बिजली-सेवाएं:-विकास-के-अवसर-की-अगली-लहर', 'upload/post/1701975414142540.jpg', '<p>One of biggest opportunities at the edge revolves around installing, maintaining, and monitoring uninterruptable power supplies; managed power services. Currently, only an estimated 27 per cent of MSPs based in the US have a managed power offering, according to SolarWinds research. For MSPs that have yet to invest in managed power services, now is a good time to explore the opportunity.</p>\r\n\r\n<p>However, adding a new offering such as managed power services isn&rsquo;t like flipping a switch. It requires thoughtful planning, execution, and reliable vendor partnerships. According to leading MSPs, ramping up can take up to 3,500 non-revenue-generating staff hours to identify and implement the necessary tools and platforms, train the staff, and identify customer leads.</p>\r\n\r\n<p>Putting that many hours into launching a new business can be a deterrent in a business where time is a scarce commodity. But working with a trusted vendor partner can significantly ease the burden of launching the service. A vendor with the resources and requisite expertise in edge management can help MSPs develop a successful remote power management practice quickly and cost-effectively.</p>', '<pre>\r\nপ্রান্তে সবচেয়ে বড় একটি সুযোগ নিরবচ্ছিন্ন বিদ্যুৎ সরবরাহ ইনস্টল, রক্ষণাবেক্ষণ এবং নিরীক্ষণের চারদিকে ঘুরে; পরিচালিত শক্তি পরিষেবা সোলারওয়াইন্ডস গবেষণা অনুসারে, বর্তমানে মার্কিন যুক্তরাষ্ট্রে অবস্থিত এমএসপিগুলির কেবলমাত্র 27 শতাংশের একটি পরিচালিত বিদ্যুৎ সরবরাহ রয়েছে। যেসব এমএসপিগুলি এখনও পরিচালিত বিদ্যুৎ পরিষেবাগুলিতে বিনিয়োগ করতে পারেনি তাদের জন্য সুযোগটি অন্বেষণ করার জন্য এখন ভাল সময়।\r\n\r\nতবে পরিচালিত শক্তি পরিষেবাগুলির মতো একটি নতুন অফার যুক্ত করা কোনও সুইচ উল্টানো পছন্দ করে না। এর জন্য চিন্তাশীল পরিকল্পনা, বাস্তবায়ন এবং নির্ভরযোগ্য বিক্রেতার অংশীদারিত্ব প্রয়োজন। শীর্ষস্থানীয় এমএসপিগুলির মতে, প্রয়োজনীয় সরঞ্জামগুলি এবং প্ল্যাটফর্মগুলি সনাক্ত করতে এবং প্রয়োগ করতে, কর্মীদের প্রশিক্ষণ দিতে এবং গ্রাহক নেতৃত্ব সনাক্ত করতে to,৫০০ অবধি অ-রাজস্ব-উত্পাদক কর্মীদের সময় নিতে পারে।\r\n\r\nএকটি নতুন ব্যবসা শুরু করার জন্য অনেক ঘন্টা স্থাপন করা এমন একটি ব্যবসায়ের প্রতিবন্ধক হতে পারে যেখানে সময় খুব কমই থাকে। তবে বিশ্বস্ত বিক্রেতার অংশীদারের সাথে কাজ করা পরিষেবাটি চালু করার বোঝা উল্লেখযোগ্যভাবে কমিয়ে আনতে পারে। প্রান্ত পরিচালনায় সংস্থান এবং প্রয়োজনীয় দক্ষতার সাথে একজন বিক্রেতা এমএসপিকে দ্রুত এবং ব্যয়বহুলভাবে একটি সফল দূরবর্তী শক্তি পরিচালনার অনুশীলন বিকাশে সহায়তা করতে পারে।</pre>', '<pre>\r\nकिनारे पर सबसे बड़े अवसरों में से एक निर्बाध बिजली आपूर्ति को स्थापित करने, बनाए रखने और निगरानी करने के आसपास घूमता है; प्रबंधित बिजली सेवाएं। सोलरविंड्स के शोध के अनुसार, वर्तमान में, यूएस में स्थित अनुमानित 27 प्रतिशत एमएसपी के पास प्रबंधित बिजली की पेशकश है। एमएसपी के लिए जिन्होंने अभी तक प्रबंधित बिजली सेवाओं में निवेश नहीं किया है, अब अवसर तलाशने का एक अच्छा समय है।\r\n\r\nहालाँकि, एक नई पेशकश जैसे कि प्रबंधित बिजली सेवाओं को जोड़ना एक स्विच को फ़्लिप करने जैसा नहीं है। इसके लिए विचारशील योजना, निष्पादन और विश्वसनीय विक्रेता भागीदारी की आवश्यकता होती है। प्रमुख एमएसपी के अनुसार, आवश्यक उपकरणों और प्लेटफार्मों की पहचान करने और उन्हें लागू करने, कर्मचारियों को प्रशिक्षित करने और ग्राहक लीड की पहचान करने के लिए रैंप अप में 3,500 गैर-राजस्व पैदा करने वाले कर्मचारियों के घंटे लग सकते हैं।\r\n\r\nएक नया व्यवसाय शुरू करने में कई घंटे लगाना उस व्यवसाय में एक बाधा हो सकता है जहां समय एक दुर्लभ वस्तु है। लेकिन एक विश्वसनीय विक्रेता भागीदार के साथ काम करने से सेवा शुरू करने का बोझ काफी कम हो सकता है। एज मैनेजमेंट में संसाधनों और अपेक्षित विशेषज्ञता वाला एक विक्रेता एमएसपी को एक सफल रिमोट पावर प्रबंधन अभ्यास जल्दी और लागत प्रभावी ढंग से विकसित करने में मदद कर सकता है।</pre>', '2021-06-08 00:00:40', NULL),
(4, 1, '3 Fundamentals of Marketing You Must Understand to Reach the Hearts and Minds of Your Customers', 'বিপণনের 3 টি মৌলিক আপনার গ্রাহকদের হৃদয় এবং মন পৌঁছাতে অবশ্যই বুঝতে হবে', 'अपने ग्राहकों के दिल और दिमाग तक पहुंचने के लिए आपको मार्केटिंग के 3 बुनियादी सिद्धांतों को समझना चाहिए', '3-fundamentals-of-marketing-you-must-understand-to-reach-the-hearts-and-minds-of-your-customers', 'বিপণনের-3-টি-মৌলিক-আপনার-গ্রাহকদের-হৃদয়-এবং-মন-পৌঁছাতে-অবশ্যই-বুঝতে-হবে', 'अपने-ग्राहकों-के-दिल-और-दिमाग-तक-पहुंचने-के-लिए-आपको-मार्केटिंग-के-3-बुनियादी-सिद्धांतों-को-समझना-चाहिए', 'upload/post/1701977075182889.jpg', '<p>The way we work is changing, but that&#39;s not the only shifting thing in the workplace: Your credibility with your coworkers can also shift &mdash; and it can happen faster than you think.</p>\r\n\r\n<p>Make a few loudmouth remarks, berate people too much, or make up a few loose facts, and you will be ostracized as someone who lacks credibility. It doesn&rsquo;t matter whether you do this over Microsoft Teams or in the breakroom in the office.</p>\r\n\r\n<p>To help you think about whether the words you say and the attitudes you espouse at work are causing people to question your abilities, here&rsquo;s a list of the quickest and most efficient ways to destroy your credibility.</p>\r\n\r\n<p>1. Announce your own success constantly<br />\r\nHave you noticed how the people who seem to toot their own horn have an image problem? And, it&rsquo;s not a good look. They tend to reveal their insecurities: look at me, I&rsquo;m awesome!</p>', '<pre>\r\nআমরা যেভাবে কাজ করি তা পরিবর্তন হচ্ছে, তবে কর্মক্ষেত্রে কেবল এটাই একমাত্র স্থানান্তরকারী জিনিস নয়: আপনার সহকর্মীদের সাথে আপনার বিশ্বাসযোগ্যতাও স্থান পরিবর্তন করতে পারে - এবং এটি আপনি যা ভাবেন তার চেয়ে দ্রুত ঘটতে পারে।\r\n\r\nকয়েকটি লাউডমাউথ মন্তব্য করুন, লোকদের অত্যধিক শঙ্কিত করুন, বা কয়েকটি আলগা তথ্য তৈরি করুন, এবং বিশ্বাসযোগ্যতার অভাবের কারণে আপনাকে বহিষ্কার করা হবে। আপনি মাইক্রোসফ্ট টিমগুলির মাধ্যমে বা অফিসে ব্রেক রুমে এটি করেন কিনা তা বিবেচ্য নয়।\r\n\r\nআপনি যে শব্দগুলি বলেছেন এবং কর্মক্ষেত্রে আপনি যে মনোভাবগুলি ব্যবহার করেছেন তাতে লোকেরা আপনার দক্ষতা নিয়ে প্রশ্ন উত্থাপন করছে কিনা তা ভেবে আপনাকে সহায়তা করতে এখানে আপনার বিশ্বাসযোগ্যতা নষ্ট করার দ্রুত এবং সবচেয়ে কার্যকর উপায়গুলির একটি তালিকা এখানে রয়েছে।\r\n\r\n1. ক্রমাগত আপনার নিজের সাফল্য ঘোষণা করুন\r\nআপনি কি খেয়াল করেছেন যে লোকেরা যারা নিজের শিংকে টটকাচ্ছে বলে মনে হচ্ছে তাদের কীভাবে একটি সমস্যা? এবং, এটি ভাল চেহারা নয়। তারা তাদের নিরাপত্তাহীনতা প্রকাশ করতে ঝোঁক: আমাকে দেখুন, আমি দুর্দান্ত!</pre>', '<pre>\r\nजिस तरह से हम काम करते हैं वह बदल रहा है, लेकिन कार्यस्थल में यही एकमात्र बदलाव नहीं है: आपके सहकर्मियों के साथ आपकी विश्वसनीयता भी बदल सकती है - और यह आपके विचार से तेज़ी से हो सकता है।\r\n\r\nकुछ ज़ोरदार टिप्पणियां करें, लोगों को बहुत अधिक डांटें, या कुछ ढीले तथ्य बनाएं, और आपको किसी ऐसे व्यक्ति के रूप में बहिष्कृत किया जाएगा जिसमें विश्वसनीयता की कमी है। इससे कोई फर्क नहीं पड़ता कि आप इसे Microsoft Teams पर करते हैं या कार्यालय में ब्रेकरूम में।\r\n\r\nयह सोचने में आपकी मदद करने के लिए कि क्या आपके द्वारा कहे गए शब्द और काम के दौरान आपके द्वारा दिए गए रवैये के कारण लोग आपकी क्षमताओं पर सवाल उठा रहे हैं, यहां आपकी विश्वसनीयता को नष्ट करने के सबसे तेज़ और सबसे कुशल तरीकों की सूची दी गई है।\r\n\r\n1. लगातार अपनी सफलता की घोषणा करें\r\nक्या आपने देखा है कि जो लोग अपने ही सींग को काटते हुए दिखते हैं उन्हें छवि की समस्या कैसे होती है? और, यह एक अच्छा लुक नहीं है। वे अपनी असुरक्षा प्रकट करते हैं: मुझे देखो, मैं कमाल हूँ!</pre>', '2021-06-08 00:27:03', NULL),
(5, 2, 'Best Growth Stocks To Buy Right Now? 5 To Watch', 'এখনই কিনতে সেরা গ্রোথ স্টক? 5 দেখার জন্য', 'बेस्ट ग्रोथ स्टॉक्स अभी खरीदें? 5 देखने के लिए', 'best-growth-stocks-to-buy-right-now?-5-to-watch', 'এখনই-কিনতে-সেরা-গ্রোথ-স্টক?-5-দেখার-জন্য', 'बेस्ट-ग्रोथ-स्टॉक्स-अभी-खरीदें?-5-देखने-के-लिए', 'upload/post/1701978544595977.jpeg', '<p>Mumbai-based telemedicine startup Truemeds is set to raise $5 million in its series A round. The investment round will be led by InfoEdge Ventures, Asha Impact and Indian Angel Network Fund.&nbsp;</p>\r\n\r\n<p>In an interaction with Entrepreneur India, Akshat Nayyar, Co-founder and chief executive officer (CEO) of Truemeds confirmed the development.&nbsp;<br />\r\nWhen asked about the utilization of the funds, Nayyar said the team will use the funds to expand their operations to three additional cities in different parts of India. He reasoned the move by saying that the company witnessed a strong organic pull from geographies that they were not able to serve well.&nbsp;</p>\r\n\r\n<p>&ldquo;We intend to expand to these additional locations to ensure consumers get the same level of service that our current target market is receiving,&rdquo; he added.</p>\r\n\r\n<p>The startup will also invest in technology to further enhance the experience of chronic patients on the platform.&nbsp;</p>', '<pre>\r\nমুম্বই-ভিত্তিক টেলিমেডিসিন স্টার্টআপ ট্রুমেডস তার সিরিজ &#39;এ&#39; রাউন্ডে ৫ মিলিয়ন ডলার সংগ্রহ করবে। ইনভেস্ট এজেন্ট ভেঞ্চারস, আশা ইমপ্যাক্ট এবং ইন্ডিয়ান অ্যাঞ্জেল নেটওয়ার্ক ফান্ডের নেতৃত্বে বিনিয়োগের রাউন্ডটি হবে।\r\n\r\nউদ্যোক্তা ভারতের সাথে একটি কথোপকথনে, ট্রুথমেডসের সহ-প্রতিষ্ঠাতা এবং প্রধান নির্বাহী কর্মকর্তা (সিইও) অক্ষত নয়য়ার এই উন্নয়নের বিষয়টি নিশ্চিত করেছেন।\r\nতহবিলের ব্যবহার সম্পর্কে জানতে চাইলে নয়ার বলেন, দলটি তহবিলগুলি ভারতের বিভিন্ন অঞ্চলে তিনটি অতিরিক্ত শহরে তাদের কার্যক্রম সম্প্রসারণ করতে ব্যবহার করবে। তিনি এই পদক্ষেপের যুক্তি দিয়ে বলেছিলেন যে সংস্থাটি ভৌগলিকাগুলি থেকে দৃ strong় জৈব টান প্রত্যক্ষ করেছে যে তারা ভালভাবে সেবা দিতে পারছে না।\r\n\r\nতিনি আরও যোগ করেন, &quot;গ্রাহকরা আমাদের বর্তমান টার্গেট মার্কেটটি যে একই স্তরের পরিষেবা পাচ্ছে তা নিশ্চিত করার জন্য আমরা এই অতিরিক্ত স্থানগুলিতে প্রসারিত করার লক্ষ্য নিয়েছি,&quot; তিনি যোগ করেন।</pre>', '<pre>\r\nमुंबई स्थित टेलीमेडिसिन स्टार्टअप ट्रूमेड्स अपनी श्रृंखला ए दौर में $ 5 मिलियन जुटाने के लिए तैयार है। इन्वेस्टमेंट राउंड का नेतृत्व इन्फोएज वेंचर्स, आशा इम्पैक्ट और इंडियन एंजेल नेटवर्क फंड करेंगे।\r\n\r\nएंटरप्रेन्योर इंडिया के साथ बातचीत में, ट्रूमेड्स के सह-संस्थापक और मुख्य कार्यकारी अधिकारी (सीईओ) अक्षत नैयर ने विकास की पुष्टि की।\r\nधन के उपयोग के बारे में पूछे जाने पर, नैयर ने कहा कि टीम भारत के विभिन्न हिस्सों में तीन अतिरिक्त शहरों में अपने परिचालन का विस्तार करने के लिए धन का उपयोग करेगी। उन्होंने यह कहते हुए इस कदम का तर्क दिया कि कंपनी ने भौगोलिक क्षेत्रों से एक मजबूत जैविक खिंचाव देखा कि वे अच्छी तरह से सेवा करने में सक्षम नहीं थे।\r\n\r\nउन्होंने कहा, &quot;हम इन अतिरिक्त स्थानों तक विस्तार करने का इरादा रखते हैं ताकि उपभोक्ताओं को उसी स्तर की सेवा मिल सके जो हमारे मौजूदा लक्षित बाजार को मिल रही है।&quot;\r\n\r\nस्टार्टअप प्लेटफॉर्म पर पुराने रोगियों के अनुभव को और बढ़ाने के लिए प्रौद्योगिकी में भी निवेश करेगा।</pre>', '2021-06-08 00:50:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_categories`
--

CREATE TABLE `blog_post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_categories`
--

INSERT INTO `blog_post_categories` (`id`, `blog_category_name_en`, `blog_category_name_ben`, `blog_category_name_hin`, `blog_category_slug_en`, `blog_category_slug_ben`, `blog_category_slug_hin`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'প্রযুক্তি', 'तकनीक', 'technology', 'প্রযুক্তি', 'तकनीक', '2021-06-07 00:41:29', '2021-06-07 00:41:29'),
(2, 'Marketing', 'বিপণন', 'विपणन', 'marketing', 'বিপণন', 'विपणन', '2021-06-07 00:10:56', NULL),
(3, 'Finance', 'অর্থায়ন', 'वित्त', 'finance', 'অর্থায়ন', 'वित्त', '2021-06-07 00:12:09', NULL),
(4, 'Inspiration', 'অনুপ্রেরণা', 'प्रेरणा स्त्रोत', 'inspiration', 'অনুপ্রেরণা', 'प्रेरणा स्त्रोत', '2021-06-07 00:13:26', NULL),
(5, 'Entrepreneurs', 'উদ্যোক্তা', 'उद्यमियों', 'entrepreneurs', 'উদ্যোক্তা', 'उद्यमियों', '2021-06-07 00:14:49', NULL),
(6, 'Leadership', 'নেতৃত্ব', 'नेतृत्व', 'leadership', 'নেতৃত্ব', 'नेतृत्व', '2021-06-07 00:15:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name_en`, `brand_name_ben`, `brand_name_hin`, `brand_slug_en`, `brand_slug_ben`, `brand_slug_hin`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'স্যামসাং', 'सैमसंग', 'samsung', 'স্যামসাং', 'सैमसंग', 'upload/brand/1699478682429238.png', NULL, NULL),
(2, 'Xiaomi', 'শাওমি', 'शाओमी', 'xiaomi', 'শাওমি', 'शाओमी', 'upload/brand/1699479591165724.png', NULL, NULL),
(3, 'Apple', 'আপেল', 'सेब', 'apple', 'আপেল', 'सेब', 'upload/brand/1699479689069747.png', NULL, '2021-05-11 12:33:40'),
(4, 'HUAWEI', 'হুয়াওয়ে', 'हुवाई', 'huawei', 'হুয়াওয়ে', 'हुवाई', 'upload/brand/1699486053326650.png', NULL, '2021-05-11 12:33:21'),
(5, 'Oppo', 'ওপ্পো', 'विपक्ष', 'oppo', 'ওপ্পো', 'विपक्ष', 'upload/brand/1699479860454853.png', NULL, NULL),
(6, 'Vivo', 'ভিভো', 'विवो', 'vivo', 'ভিভো', 'विवो', 'upload/brand/1699479953211978.png', NULL, NULL),
(10, 'POCO', 'হুয়াওয়ে', 'थोड़ा', 'poco', 'হুয়াওয়ে', 'थोड़ा', 'upload/brand/1699930335977595.jpg', NULL, '2021-05-16 10:15:01'),
(11, 'Peacockalley', 'ময়ূরকৌলি', 'मयूरकैली', 'peacockalley', 'ময়ূরকড়লি', 'मयूरकैली', 'upload/brand/1699931209880965.png', NULL, NULL),
(12, 'Ajanta', 'অজন্তা', 'अजंता', 'ajanta', 'অজন্তা', 'अजंता', 'upload/brand/1700121674345707.png', NULL, NULL),
(13, 'Paragon', 'প্যারাগন', 'प्रतिद्वंद्वी', 'paragon', 'প্যারাগন', 'प्रतिद्वंद्वी', 'upload/brand/1700121860501720.png', NULL, NULL),
(14, 'Heineken', 'হেইনেকেন', 'हेनेकेन', 'heineken', 'হেইনেকেন', 'हेनेकेन', 'upload/brand/1700168053342359.png', NULL, NULL),
(15, 'Gucci', 'গুচি', 'गुच्ची', 'gucci', 'গুচি', 'गुच्ची', 'upload/brand/1700168873724814.png', NULL, NULL),
(16, 'Panasonic', 'প্যানাসনিক', 'पैनासोनिक', 'panasonic', 'প্যানাসনিক', 'पैनासोनिक', 'upload/brand/1700169387659306.png', NULL, NULL),
(17, 'VERO MODA', 'সত্য ফ্যাশন', 'सही फैशन', 'vero-moda', 'সত্য-ফ্যাশন', 'सही-फैशन', 'upload/brand/1700174160008033.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name_en`, `category_name_ben`, `category_name_hin`, `category_slug_en`, `category_slug_ben`, `category_slug_hin`, `category_icon`, `created_at`, `updated_at`) VALUES
(11, 'Fashion', 'ফ্যাশন', 'फैशन', 'fashion', 'ফ্যাশন', 'फैशन', 'fa fa-clock-o', NULL, '2021-05-17 13:34:11'),
(12, 'Appliances', 'সরঞ্জাম', 'उपकरण', 'appliances', 'সরঞ্জাম', 'उपकरण', 'fa fa-shopping-cart', NULL, '2021-05-14 01:37:55'),
(13, 'Electronics Gadgets', 'বৈদ্যুতিন', 'उपकरण', 'electronics-gadgets', 'বৈদ্যুতিন', 'उपकरण', 'fa fa-diamond', NULL, '2021-05-17 13:39:50'),
(14, 'Sweet Home', 'বাড়ি', 'प्यारा घर', 'sweet-home', 'বাড়ি', 'प्यारा-घर', 'fa fa-paw', NULL, '2021-05-17 13:40:41'),
(15, 'Beauty', 'সৌন্দর্য', 'सुंदरता', 'beauty', 'সড়ন্দর্য', 'सुंदरता', 'fa fa-laptop', NULL, '2021-05-17 13:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HAPPY NEW YEAR', 20, '2021-06-30', 1, '2021-06-06 15:10:48', '2021-06-06 15:10:48'),
(3, 'KEEP LEARNING', 25, '2021-06-23', 1, '2021-06-06 15:11:05', '2021-06-06 15:11:05'),
(4, 'HAPPY LEARNING', 35, '2021-06-24', 1, '2021-06-06 15:10:35', '2021-06-06 15:10:35'),
(5, 'HELLO WORLD', 20, '2021-07-03', 1, '2021-06-28 09:58:54', NULL),
(6, 'ONLINE SHOP', 20, '2021-07-11', 1, '2021-07-07 08:42:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_04_30_111741_create_sessions_table', 1),
(7, '2021_05_01_094618_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(13, 5, 'upload/products/multi_Image/1699910922430055.jpeg', '2021-05-16 05:06:27', NULL),
(15, 5, 'upload/products/multi_Image/1699910922979024.jpeg', '2021-05-16 05:06:27', NULL),
(16, 5, 'upload/products/multi_Image/1699910923216236.jpeg', '2021-05-16 05:06:27', NULL),
(17, 6, 'upload/products/multi_Image/1699930938858646.jpeg', '2021-05-16 10:24:36', NULL),
(18, 6, 'upload/products/multi_Image/1699930939328499.jpeg', '2021-05-16 10:24:36', NULL),
(19, 6, 'upload/products/multi_Image/1699930939795911.jpeg', '2021-05-16 10:24:37', NULL),
(20, 7, 'upload/products/multi_Image/1699931546784437.jpeg', '2021-05-16 10:34:16', NULL),
(21, 7, 'upload/products/multi_Image/1699931547021719.jpeg', '2021-05-16 10:34:16', NULL),
(22, 7, 'upload/products/multi_Image/1699931547226842.jpeg', '2021-05-16 10:34:16', NULL),
(23, 8, 'upload/products/multi_Image/1699931549464401.jpeg', '2021-05-16 10:34:18', NULL),
(24, 8, 'upload/products/multi_Image/1699931550613784.jpeg', '2021-05-16 10:34:19', NULL),
(25, 8, 'upload/products/multi_Image/1699931551076723.jpeg', '2021-05-16 10:34:20', NULL),
(26, 9, 'upload/products/multi_Image/1699932059136335.jpeg', '2021-05-16 10:42:24', NULL),
(27, 9, 'upload/products/multi_Image/1699932059317708.jpeg', '2021-05-16 10:42:24', NULL),
(28, 9, 'upload/products/multi_Image/1699932059488982.jpeg', '2021-05-16 10:42:24', NULL),
(29, 9, 'upload/products/multi_Image/1699932059891560.jpeg', '2021-05-16 10:42:25', NULL),
(30, 9, 'upload/products/multi_Image/1699932060227679.jpeg', '2021-05-16 10:42:25', NULL),
(31, 10, 'upload/products/multi_Image/1700122482518650.jpeg', '2021-05-18 13:09:06', NULL),
(32, 10, 'upload/products/multi_Image/1700122483097950.jpeg', '2021-05-18 13:09:07', NULL),
(33, 10, 'upload/products/multi_Image/1700122483776311.jpeg', '2021-05-18 13:09:08', NULL),
(34, 10, 'upload/products/multi_Image/1700122484452462.jpeg', '2021-05-18 13:09:08', NULL),
(35, 10, 'upload/products/multi_Image/1700122485152524.jpeg', '2021-05-18 13:09:09', NULL),
(36, 11, 'upload/products/multi_Image/1700123603577846.jpeg', '2021-05-18 13:26:55', NULL),
(37, 11, 'upload/products/multi_Image/1700123604008767.jpeg', '2021-05-18 13:26:56', NULL),
(38, 11, 'upload/products/multi_Image/1700123604556023.jpeg', '2021-05-18 13:26:56', NULL),
(39, 11, 'upload/products/multi_Image/1700123605001706.jpeg', '2021-05-18 13:26:57', NULL),
(40, 11, 'upload/products/multi_Image/1700123605435015.jpeg', '2021-05-18 13:26:57', NULL),
(41, 12, 'upload/products/multi_Image/1700168359784428.jpeg', '2021-05-19 01:18:18', NULL),
(42, 12, 'upload/products/multi_Image/1700168360241650.jpeg', '2021-05-19 01:18:19', NULL),
(43, 12, 'upload/products/multi_Image/1700168360688611.jpeg', '2021-05-19 01:18:19', NULL),
(44, 12, 'upload/products/multi_Image/1700168361078631.jpeg', '2021-05-19 01:18:19', NULL),
(45, 13, 'upload/products/multi_Image/1700169158441886.jpeg', '2021-05-19 01:31:00', NULL),
(46, 13, 'upload/products/multi_Image/1700169159101786.jpeg', '2021-05-19 01:31:01', NULL),
(47, 13, 'upload/products/multi_Image/1700169159747752.jpeg', '2021-05-19 01:31:01', NULL),
(48, 13, 'upload/products/multi_Image/1700169160322186.jpeg', '2021-05-19 01:31:02', NULL),
(49, 13, 'upload/products/multi_Image/1700169161108517.jpeg', '2021-05-19 01:31:03', NULL),
(50, 14, 'upload/products/multi_Image/1700169792651758.jpeg', '2021-05-19 01:41:05', NULL),
(51, 14, 'upload/products/multi_Image/1700169793091480.jpeg', '2021-05-19 01:41:05', NULL),
(52, 14, 'upload/products/multi_Image/1700169793456932.jpeg', '2021-05-19 01:41:05', NULL),
(53, 14, 'upload/products/multi_Image/1700169793880380.jpeg', '2021-05-19 01:41:06', NULL),
(54, 14, 'upload/products/multi_Image/1700169794358867.jpeg', '2021-05-19 01:41:06', NULL),
(55, 15, 'upload/products/multi_Image/1700170136496533.jpeg', '2021-05-19 01:46:33', NULL),
(56, 15, 'upload/products/multi_Image/1700170137053496.jpeg', '2021-05-19 01:46:33', NULL),
(57, 15, 'upload/products/multi_Image/1700170137620762.jpeg', '2021-05-19 01:46:34', NULL),
(58, 16, 'upload/products/multi_Image/1700174991469258.jpeg', '2021-05-19 03:03:43', NULL),
(59, 16, 'upload/products/multi_Image/1700174991865293.jpeg', '2021-05-19 03:03:43', NULL),
(60, 16, 'upload/products/multi_Image/1700174992198992.jpeg', '2021-05-19 03:03:43', NULL),
(61, 16, 'upload/products/multi_Image/1700174992534698.jpeg', '2021-05-19 03:03:44', NULL),
(62, 17, 'upload/products/multi_Image/1700175413099436.jpeg', '2021-05-19 03:10:25', NULL),
(63, 17, 'upload/products/multi_Image/1700175413330220.jpeg', '2021-05-19 03:10:25', NULL),
(64, 17, 'upload/products/multi_Image/1700175413517822.jpeg', '2021-05-19 03:10:25', NULL),
(65, 18, 'upload/products/multi_Image/1700175844304990.jpeg', '2021-05-19 03:17:16', NULL),
(66, 18, 'upload/products/multi_Image/1700175844892945.jpeg', '2021-05-19 03:17:17', NULL),
(67, 18, 'upload/products/multi_Image/1700175845428120.jpeg', '2021-05-19 03:17:17', NULL),
(68, 19, 'upload/products/multi_Image/1704548673055717.jpeg', '2021-07-06 09:41:30', NULL),
(69, 19, 'upload/products/multi_Image/1704548673349687.jpeg', '2021-07-06 09:41:31', NULL),
(70, 19, 'upload/products/multi_Image/1704548673706885.jpeg', '2021-07-06 09:41:31', NULL),
(71, 20, 'upload/products/multi_Image/1704549566930015.jpeg', '2021-07-06 09:55:43', NULL),
(72, 20, 'upload/products/multi_Image/1704549567383415.jpeg', '2021-07-06 09:55:44', NULL),
(73, 20, 'upload/products/multi_Image/1704549568130864.jpeg', '2021-07-06 09:55:44', NULL),
(74, 20, 'upload/products/multi_Image/1704549568777087.jpeg', '2021-07-06 09:55:45', NULL),
(75, 21, 'upload/products/multi_Image/1704550086095438.jpeg', '2021-07-06 10:03:58', NULL),
(76, 21, 'upload/products/multi_Image/1704550086443573.jpeg', '2021-07-06 10:03:58', NULL),
(77, 21, 'upload/products/multi_Image/1704550086662297.jpeg', '2021-07-06 10:03:58', NULL),
(78, 21, 'upload/products/multi_Image/1704550086910870.jpeg', '2021-07-06 10:03:59', NULL),
(79, 21, 'upload/products/multi_Image/1704550088273603.jpeg', '2021-07-06 10:04:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `return_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_order`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(11, 2, 13, 8, 7, 'Subhankar Dutta', 'subho@gmail.com', '9578965412', 714445, 'Test Product1', 'card_1J5oAOSHVh5v2cN1oKgEPJYU', 'Stripe', 'txn_1J5oATSHVh5v2cN1WJmzrn35', 'inr', 38900.00, '60d445db511f2', 'EOS25608769', '24 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Cancel', '2021-06-24 03:14:17', '2021-07-08 04:30:33'),
(12, 2, 7, 9, 8, 'Subhankar Dutta', 'subho@gmail.com', '9578965412', 798455, 'Test Order 3', 'card_1J5oTrSHVh5v2cN1m3RoCR9I', 'Stripe', 'txn_1J5oTtSHVh5v2cN1s2OvUsqX', 'inr', 1950.00, '60d44a9099822', 'EOS17933978', '24 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-24 03:34:19', NULL),
(13, 2, 11, 11, 10, 'Subhankar Dutta', 'subho@gmail.com', '9578965412', 778544, 'Test Order 4', 'Cash on Delivery', 'Cash on Delivery', NULL, 'inr', 12900.00, NULL, 'EOS70963602', '24 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-24 04:48:00', NULL),
(14, 2, 9, 10, 9, 'Subhankar Dutta', 'subho@gmail.com', '9578965412', 732154, 'Test Order 56', 'Cash on Delivery', 'Cash on Delivery', NULL, 'inr', 1890.00, NULL, 'EOS55680530', '24 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Confirm', '2021-06-24 04:59:48', '2021-06-28 10:34:21'),
(15, 3, 16, 16, 15, 'Moumita Dutta', 'moumita@gmail.com', '7854122441', 7311458, 'Order Post 89', 'card_1J6HOESHVh5v2cN1BeSlwgIj', 'Stripe', 'txn_1J6HOKSHVh5v2cN1TCAfv4ki', 'inr', 7557.00, '60d5fca83c006', 'EOS73936578', '25 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-25 10:26:31', NULL),
(16, 4, 11, 11, 10, 'kajal', 'kajal@gmail.com', '45877745', 854777, 'Order Test 258', 'Cash on Delivery', 'Cash on Delivery', NULL, 'inr', 20169.00, NULL, 'EOS27748121', '25 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-25 13:09:26', NULL),
(17, 4, 14, 17, 16, 'kajal', 'kajal@gmail.com', '45877745', 854777, 'Test Order 112', 'card_1J6JyCSHVh5v2cN1HU1q93at', 'Stripe', 'txn_1J6JyFSHVh5v2cN1az0Xo87D', 'inr', 998.00, '60d623657d7c0', 'EOS46492032', '25 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Confirm', '2021-06-25 13:11:43', '2021-06-25 13:47:18'),
(18, 2, 7, 9, 8, 'Subhankar Dutta', 'subho@gmail.com', '9578965412', 7485452, 'Order Notes 2558', 'card_1J6KhASHVh5v2cN1lbFaQ3vp', 'Stripe', 'txn_1J6KhDSHVh5v2cN11t67gIQy', 'inr', 728.00, '60d62e496e068', 'EOS59943516', '25 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-25 13:58:14', NULL),
(19, 3, 15, 15, 14, 'Moumita Dutta', 'moumita@gmail.com', '7854122441', 7841258, 'test order 4458', 'Cash on Delivery', 'Cash on Delivery', NULL, 'inr', 2519.00, NULL, 'EOS56858367', '25 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Delivered', '2021-06-25 14:08:35', '2021-06-26 05:43:10'),
(20, 4, 8, 12, 11, 'kajal', 'kajal@gmail.com', '45877745', 854777, 'Note Order testing', 'card_1J6KyESHVh5v2cN1lMEJxyN3', 'Stripe', 'txn_1J6KyISHVh5v2cN1Qaf9hHGT', 'inr', 2519.00, '60d6326c703c3', 'EOS58782004', '25 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-25 14:15:50', NULL),
(21, 3, 7, 9, 8, 'Moumita Dutta', 'moumita@gmail.com', '7854122441', 7854112, 'Test Notes order 554', 'Cash on Delivery', 'Cash on Delivery', NULL, 'inr', 38900.00, NULL, 'EOS79937078', '26 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Delivered', '2021-06-26 04:49:38', '2021-06-26 05:00:54'),
(22, 3, 11, 11, 10, 'Moumita Dutta', 'moumita@gmail.com', '7854122441', 7851120, 'Test Notes 1254', 'Cash on Delivery', 'Cash on Delivery', NULL, 'inr', 1199.00, NULL, 'EOS59264883', '26 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-26 05:44:53', NULL),
(23, 5, 8, 12, 11, 'Susmita Pal', 'susmita@gmail.com', '8754220000', 711315, 'This product is amazing', 'card_1J7MdbSHVh5v2cN1jHN3njig', 'Stripe', 'txn_1J7MdgSHVh5v2cN1ywG8DNqU', 'inr', 15199.00, '60d9ee6d64378', 'EOS75688483', '28 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-28 10:14:50', NULL),
(24, 5, 8, 12, 11, 'Susmita Pal', 'susmita@gmail.com', '8754220000', 711315, 'This is my second product', 'card_1J7MinSHVh5v2cN1R3FW60jQ', 'Stripe', 'txn_1J7MiqSHVh5v2cN1DpMurWHy', 'inr', 5038.00, '60d9efae5ca1f', 'EOS22035025', '28 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Delivered', '2021-06-28 10:20:08', '2021-06-28 10:41:47'),
(25, 5, 13, 8, 7, 'Susmita Pal', 'susmita@gmail.com', '8754220000', 718744, 'This is my Product', 'card_1J7NB7SHVh5v2cN16I2PJRMp', 'Stripe', 'txn_1J7NB9SHVh5v2cN1AKIzUXHr', 'inr', 38900.00, '60d9f68a0e890', 'EOS41725771', '28 June 2021', 'June', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-06-28 10:49:23', NULL),
(26, 6, 8, 12, 11, 'Anindita', 'anindita@gmail.com', '7854411220', 721160, 'Test Order 5623', 'card_1JAbt1SHVh5v2cN1sMRE3oxq', 'Stripe', 'txn_1JAbt5SHVh5v2cN1tYcauto2', 'inr', 7960.00, '60e5bc4daba90', 'EOS66818540', '07 July 2021', 'July', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '07 July 2021', '2', 'This is not working properly', 'Delivered', '2021-07-07 09:08:10', '2021-07-07 10:47:36'),
(27, 7, 7, 9, 8, 'Arijit Dutta', 'arijit@gmail.com', '5587455200', 743271, 'Banshtala more, Habra', 'card_1JAtd7SHVh5v2cN1rJlOtspM', 'Stripe', 'txn_1JAtdBSHVh5v2cN13K2NUi5M', 'inr', 12799.00, '60e6c6bb367e1', 'EOS27964213', '08 July 2021', 'July', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Delivered', '2021-07-08 04:04:54', '2021-07-08 04:29:12'),
(28, 7, 11, 11, 10, 'Arijit Dutta', 'arijit@gmail.com', '5587455200', 743271, 'house no : 223', 'Cash on Delivery', 'Cash on Delivery', NULL, 'inr', 799.00, NULL, 'EOS13029038', '08 July 2021', 'July', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-07-08 04:19:28', NULL),
(29, 2, 9, 10, 9, 'Subhankar Dutta', 'subho@gmail.com', '9578965412', 713346, 'Kumra Bazar', 'card_1JAzejSHVh5v2cN1WUsvDW9W', 'Stripe', 'txn_1JAzepSHVh5v2cN1Iew6vmfQ', 'inr', 9950.00, '60e7213720286', 'EOS47869586', '08 July 2021', 'July', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Shipped', '2021-07-08 10:31:00', '2021-07-08 10:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(12, 11, 17, 'Ocean Blue', NULL, '1', 38900.00, '2021-06-24 03:14:25', NULL),
(13, 12, 15, 'black', 'm', '3', 650.00, '2021-06-24 03:34:23', NULL),
(14, 13, 14, 'Gray', '6kg', '1', 12900.00, '2021-06-24 04:48:03', NULL),
(15, 14, 12, 'brown', '330ml', '6', 315.00, '2021-06-24 04:59:55', NULL),
(16, 15, 16, 'black', 'm', '3', 2519.00, '2021-06-25 10:26:38', NULL),
(17, 16, 5, 'blue', 'large', '3', 390.00, '2021-06-25 13:09:31', NULL),
(18, 16, 6, 'Steel Blue', '16.94 cm (6.67 inch) Full HD+ Display', '1', 18999.00, '2021-06-25 13:09:31', NULL),
(19, 17, 10, 'Gray', '7', '2', 499.00, '2021-06-25 13:11:47', NULL),
(20, 18, 8, 'white', 'l', '2', 455.00, '2021-06-25 13:58:19', NULL),
(21, 19, 16, 'black', 'm', '1', 2519.00, '2021-06-25 14:08:40', NULL),
(22, 20, 16, 'black', 'm', '1', 2519.00, '2021-06-25 14:15:54', NULL),
(23, 21, 17, 'Ocean Blue', NULL, '1', 38900.00, '2021-06-26 04:49:47', NULL),
(24, 22, 13, 'Gray', 'xl', '1', 1199.00, '2021-06-26 05:44:56', NULL),
(25, 23, 6, 'Steel Blue', '16.94 cm (6.67 inch) Full HD+ Display', '1', 18999.00, '2021-06-28 10:14:57', NULL),
(26, 24, 16, 'black', 'm', '2', 2519.00, '2021-06-28 10:20:11', NULL),
(27, 25, 17, 'Ocean Blue', NULL, '1', 38900.00, '2021-06-28 10:49:28', NULL),
(28, 26, 21, 'white', '6.5 kg', '1', 9950.00, '2021-07-07 09:08:16', NULL),
(29, 27, 20, 'black', '32 inch', '1', 15999.00, '2021-07-08 04:05:01', NULL),
(30, 28, 18, '--Choose Color--', '--Choose Size--', '1', 799.00, '2021-07-08 04:19:32', NULL),
(31, 29, 21, '--Choose Color--', '--Choose Size--', '1', 9950.00, '2021-07-08 10:31:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_ben` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_hin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc_ben` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc_hin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name_en`, `product_name_ben`, `product_name_hin`, `product_slug_en`, `product_slug_ben`, `product_slug_hin`, `product_code`, `product_quantity`, `product_tags_en`, `product_tags_ben`, `product_tags_hin`, `product_size_en`, `product_size_ben`, `product_size_hin`, `product_color_en`, `product_color_ben`, `product_color_hin`, `selling_price`, `discount_price`, `short_desc_en`, `short_desc_ben`, `short_desc_hin`, `long_desc_en`, `long_desc_ben`, `long_desc_hin`, `product_thumbnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(5, 5, 15, 23, 55, 'Cadbury Madbury Bars', 'ক্যাডবারি ম্যাডবারি বারস', 'कैडबरी मैडबरी बार्सो', 'cadbury-madbury-bars', 'ক্যাডবারি ম্যাডবারি বারস', 'कैडबरी मैडबरी बार्सो', '44785', '300', 'cadbury,mudbury', 'ম্যাডবারি ,ক্যাডবারি', 'कैडबरी,मैडबरी', 'large', 'বড়', 'बड़े', 'blue', 'blue', 'blue', '390', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন,', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है,', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<pre>\r\nLorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল</pre>', '<pre>\r\nलोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में डेस्कटॉप प्रकाशन सॉफ्टवेयर जैसे एल्डस पेजमेकर के साथ लोरेम इप्सम के संस्करणों सहित।</pre>', 'upload/products/thumbnail/1699910922170501.jpeg', NULL, 1, 1, NULL, 1, '2021-05-19 09:42:10', '2021-05-19 09:42:11'),
(6, 10, 13, 14, 60, 'POCO X3 Pro (Steel Blue, 128 GB)', 'পোকো এক্স 3 প্রো (Steel Blue, 128 GB)', 'पोको एक्स3 प्रो (Steel Blue, 128 GB)', 'poco-x3-pro-(steel-blue,-128-gb)', 'পোকো এক্স 3 প্রো (Steel Blue, 128 GB)', 'पोको एक्स3 प्रो (Steel Blue, 128 GB)', '77441', '150', 'POCO X3 Pro', 'পোকো এক্স 3 প্রো', 'पोको एक्स3 प्रो', '16.94 cm (6.67 inch) Full HD+ Display', '16.94 cm (6.67 inch) Full HD+ Display', '16.94 cm (6.67 inch) Full HD+ Display', 'Steel Blue', 'ইস্পাত নীল', 'इस्पात नीला', '23999', '18999', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন,', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<pre>\r\nLorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সহ লেটারসেট শীট প্রকাশের সাথে জনপ্রিয় হয়েছিল এবং আরও সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লরেম ইপসামের সংস্করণগুলি সহ এটি জনপ্রিয় হয়েছিল</pre>', '<pre>\r\nलोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरेम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में डेस्कटॉप प्रकाशन सॉफ्टवेयर जैसे एल्डस पेजमेकर के साथ लोरम इप्सम के संस्करण</pre>', 'upload/products/thumbnail/1699930938351694.jpeg', 1, 1, 1, NULL, 1, '2021-05-19 23:23:40', '2021-05-19 23:23:40'),
(8, 11, 14, 16, 33, 'ADIRAV 200 TC Cotton Double Printed Bedsheet', 'ADIRAV 200 টিসি তুলা ডাবল মুদ্রিত বেডশিট B', 'ADIRAV 200 TC कॉटन डबल प्रिंटेड बेडशीट', 'adirav-200-tc-cotton-double-printed-bedsheet', 'ADIRAV 200 টিসি তুলা ডাবল মুদ্রিত বেডশিট B', 'ADIRAV 200 TC कॉटन डबल प्रिंटेड बेडशीट', '12547', '200', 'cotton,double-printed', 'cotton,double-printed', 'cotton,double-printed', 'l,md', 'l,md', 'l,md', 'white', 'white', 'white', '999', '455', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<pre>\r\nLorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সহ লেটারসেট শীট প্রকাশের সাথে জনপ্রিয় হয়েছিল এবং আরও সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লরেম ইপসামের সংস্করণগুলি সহ এটি জনপ্রিয় হয়েছিল</pre>', '<pre>\r\nलोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरेम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में डेस्कटॉप प्रकाशन सॉफ्टवेयर जैसे एल्डस पेजमेकर के साथ लोरम इप्सम के संस्करण</pre>', 'upload/products/thumbnail/1699931547677360.jpeg', NULL, 1, NULL, 1, 1, '2021-05-16 10:34:16', '2021-05-16 10:48:03'),
(9, 5, 13, 14, 60, 'OPPO F17', 'OPPO F17', 'ओप्पो F17', 'oppo-f17', 'OPPO F17', 'ओप्पो F17', '75521', '42', 'OPPO F17', 'OPPO F17', 'OPPO F17', 'l', 'l', 'l', 'Dynamic Orange', 'Dynamic Orange', 'Dynamic Orange', '20990', '16990', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<pre>\r\nLorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সহ লেটারসেট শীট প্রকাশের সাথে জনপ্রিয় হয়েছিল এবং আরও সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লরেম ইপসামের সংস্করণগুলি সহ এটি জনপ্রিয় হয়েছিল</pre>', '<pre>\r\nलोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरेम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में डेस्कटॉप प्रकाशन सॉफ्टवेयर जैसे एल्डस पेजमेकर के साथ लोरम इप्सम के संस्करण</pre>', 'upload/products/thumbnail/1699932058932997.jpeg', 1, 1, NULL, NULL, 1, '2021-05-16 10:42:24', '2021-06-10 00:34:52'),
(10, 13, 11, 12, 20, 'Women Grey Flats Sandal', 'মহিলা গ্রে ফ্ল্যাট স্যান্ডেল', 'महिला ग्रे फ्लैट सैंडल', 'women-grey-flats-sandal', 'মহিলা গ্রে ফ্ল্যাট স্যান্ডেল', 'महिला ग्रे फ्लैट सैंडल', '44587', '150', 'Flats,Sandel', 'flats,sandel', 'Flats,Sandel', '7,6,5', '7,6,5', '7,6,5', 'Gray', 'gray', 'Gray', '899', '499', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<pre>\r\nLorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।</pre>', '<pre>\r\nलोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</pre>', 'upload/products/thumbnail/1700122481357490.jpeg', NULL, 1, NULL, NULL, 1, '2021-05-18 13:09:06', NULL),
(11, 1, 12, 19, 43, 'SAMSUNG 80 cm (32 inch) HD Ready LED Smart TV 2020 Edition  (UA32T4340AKXXL)', 'স্যামস্যাং 80 সেন্টিমিটার (32 ইঞ্চি) এইচডি রেডি এলইডি স্মার্ট টিভি 2020 সংস্করণ (ইউএ 32 টি 4340 এএক্সএক্সএক্সএল)', 'सैमसंग 80 सेमी (32 इंच) एचडी रेडी एलईडी स्मार्ट टीवी 2020 एडिशन (UA32T4340AKXXL)', 'samsung-80-cm-(32-inch)-hd-ready-led-smart-tv-2020-edition--(ua32t4340akxxl)', 'স্যামস্যাং 80 সেন্টিমিটার (32 ইঞ্চি) এইচডি রেডি এলইডি স্মার্ট টিভি 2020 সংস্করণ (ইউএ 32 টি 4340 এএক্সএক্সএক্সএল)', 'सैमसंग 80 सेमी (32 इंच) एचडी रेडी एलईडी स्मार्ट टीवी 2020 एडिशन (UA32T4340AKXXL)', '22458', '50', 'LED,Smart', 'LED,Smart', 'LED,Smart', '32 inch', '32 ইঞ্চি', '32 इंच', 'black', 'black', 'black', '19900', '16999', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন,', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<pre>\r\nLorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।</pre>', '<pre>\r\nलोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</pre>', 'upload/products/thumbnail/1700123603188483.jpeg', NULL, 1, NULL, 1, 1, '2021-05-18 13:26:55', NULL),
(12, 14, 15, 23, 54, 'Heineken Non Alcohol Beer Can', 'হাইনেন নন অ্যালকোহল বিয়ার ক্যান', 'हेनेकेन नॉन अल्कोहल बीयर कैन', 'heineken-non-alcohol-beer-can', 'হাইনেন নন অ্যালকোহল বিয়ার ক্যান', 'हेनेकेन नॉन अल्कोहल बीयर कैन', '55214', '500', 'Non Alcohol', 'Non Alcohol', 'Non Alcohol', '330ml', '330ml', '330ml', 'brown', 'brown', 'brown', '450', '315', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।</p>', '<p>लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</p>', 'upload/products/thumbnail/1700168359063847.jpeg', NULL, 1, NULL, NULL, 1, '2021-05-20 02:51:29', '2021-05-20 02:51:29'),
(13, 15, 11, 9, 12, 'Men Slim Fit Checkered Casual Shirt', 'পুরুষ স্লিম ফিট চেকার্ড ক্যাজুয়াল শার্ট', 'मेन स्लिम फिट चेकर्ड कैजुअल शर्ट', 'men-slim-fit-checkered-casual-shirt', 'পুরুষ স্লিম ফিট চেকার্ড ক্যাজুয়াল শার্ট', 'मेन स्लिम फिट चेकर्ड कैजुअल शर्ट', '44783', '100', 'Checkered,Casual', 'Checkered,Casual', 'Checkered,Casual', 'xl,l,m', 'm,l,xl', 'm,l,xl', 'Gray', 'Gray', 'Gray', '1999', '1199', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p><br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p><br />\r\nLorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।</p>', '<p>लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</p>', 'upload/products/thumbnail/1700169157709905.jpeg', 1, NULL, NULL, NULL, 1, '2021-05-19 23:22:58', '2021-05-19 23:22:58'),
(14, 16, 12, 20, 47, 'Panasonic 6 kg 5 Star AquaBeat Wash Fully Automatic Top Load Grey  (NA-F60LF1HRB)', 'প্যানাসনিক 6 কেজি 5 স্টার অ্যাকোয়াবিট ওয়াশ সম্পূর্ণ স্বয়ংক্রিয়ভাবে শীর্ষ লোড গ্রে (এনএ-এফ 60 এলএফ 1 এইচআরবি)', 'पैनासोनिक 6 केजी 5 स्टार एक्वाबीट वॉश फुल्ली आटोमेटिक टॉप लोड जीआरई (एनए-एफ६०एलएफ१एचआरबी)', 'panasonic-6-kg-5-star-aquabeat-wash-fully-automatic-top-load-grey--(na-f60lf1hrb)', 'প্যানাসনিক 6 কেজি 5 স্টার অ্যাকোয়াবিট ওয়াশ সম্পূর্ণ স্বয়ংক্রিয়ভাবে শীর্ষ লোড গ্রে (এনএ-এফ 60 এলএফ 1 এইচআরবি)', 'पैनासोनिक 6 केजी 5 स्टार एक्वाबीट वॉश फुल्ली आटोमेटिक टॉप लोड जीआरई (एनए-एफ६०एलएफ१एचआरबी)', '33451', '50', 'AquaBeat,Automatic', 'AquaBeat,Automatic', 'AquaBeat,Automatic', '6kg', '6kg', '6kg', 'Gray', 'Gray', 'Gray', '16700', '12900', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p><br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।</p>', '<p>लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</p>', 'upload/products/thumbnail/1700169792240539.jpeg', NULL, NULL, 1, NULL, 1, '2021-05-19 01:41:04', NULL),
(15, 15, 11, 9, 11, 'Mens T-shirt', 'মেনস টি-শার্ট', 'पुरुषों की टी-शर्ट', 'mens-t-shirt', 'মেনস টি-শার্ট', 'पुरुषों की टी-शर्ट', '18754', '0', 't-shirt', 't-shirt', 't-shirt', 'm,l,xl', 'm,l,xl', 'm,l,xl', 'black,red', 'black,red', 'black,red', '650', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p><br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।</p>', '<p>र्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</p>', 'upload/products/thumbnail/1700170135963701.jpeg', NULL, 1, NULL, 1, 1, '2021-05-22 15:02:05', '2021-05-22 15:02:05'),
(16, 17, 11, 25, 61, 'Women Regular Fit Solid Casual Shirt', 'মহিলা নিয়মিত ফিট সলিড ক্যাজুয়াল শার্ট', 'महिला नियमित फ़िट ठोस आरामदायक शर्ट', 'women-regular-fit-solid-casual-shirt', 'মহিলা নিয়মিত ফিট সলিড ক্যাজুয়াল শার্ট', 'महिला नियमित फ़िट ठोस आरामदायक शर्ट', '35487', '97', 'Casual', 'Casual', 'Casual', 'm,l', 'm,l', 'm,l', 'black', 'black', 'black', '2799', '2519', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।</p>', '<p>&nbsp;एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</p>', 'upload/products/thumbnail/1700174991099627.jpeg', NULL, 1, NULL, 1, 1, '2021-05-19 03:03:42', '2021-06-28 10:41:47'),
(17, 16, 12, 21, 49, 'Panasonic 307 L Frost Free Double Door 4 Star Refrigerator', 'প্যানাসনিক 307 এল ফ্রস্ট ফ্রি ডাবল ডোর 4 স্টার রেফ্রিজারেটর', 'पैनासोनिक ३०७ L फ्रॉस्ट फ़ेरे डबल दूर ४ स्टार फ्रिज', 'panasonic-307-l-frost-free-double-door-4-star-refrigerator', 'প্যানাসনিক 307 এল ফ্রস্ট ফ্রি ডাবল ডোর 4 স্টার রেফ্রিজারেটর', 'पैनासोनिक ३०७ L फ्रॉस्ट फ़ेरे डबल दूर ४ स्टार फ्रिज', '50021', '68', 'Double Door', 'Double Door', 'Double Door', NULL, NULL, NULL, 'Ocean Blue,white', 'Ocean Blue,white', 'Ocean Blue,white', '42990', '38900', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>', '<p>Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।</p>', '<p>&nbsp;एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</p>', 'upload/products/thumbnail/1700175412868218.jpeg', NULL, 1, NULL, NULL, 1, '2021-05-22 14:17:01', '2021-06-26 05:00:53'),
(18, 15, 11, 10, 14, 'Regular Men Dark Blue Jeans', 'নিয়মিত পুরুষদের গাark় নীল জিন্স', 'रेगुलर मेन डार्क ब्लू जींस', 'regular-men-dark-blue-jeans', 'নিয়মিত পুরুষদের গাark় নীল জিন্স', 'रेगुलर मेन डार्क ब्लू जींस', '44785', '200', 'jeans', 'Jeans', 'Jeans', '32,34,30', '30,32,34', '30,32,34', 'Dark Blue', 'Dark Blue', 'Dark Blue', '1399', '799', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন', 'लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>', '<p>Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্য হিসাবে কাজ করছেন, যখন কোনও অজানা প্রিন্টার একটি গ্যালারী টাইপ নিয়ে স্ক্র্যাম্বল করে একটি ধরণের নমুনার বই তৈরি করেছিলেন। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সমেত লেট্রেসেট শিট প্রকাশের মাধ্যমে এবং সম্প্রতি সম্প্রতি এলডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফটওয়্যার সহ লোরেম ইপসামের সংস্করণ সহ জনপ্রিয় হয়েছিল।<br />\r\n&nbsp;</p>', '<p>लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का केवल डमी टेक्स्ट है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी टेक्स्ट रहा है, जब एक अज्ञात प्रिंटर ने एक प्रकार की गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए हाथापाई की। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी छलांग लगाई है, जो अनिवार्य रूप से अपरिवर्तित है। इसे 1960 के दशक में लोरम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रिय किया गया था, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ लोरेम इप्सम के संस्करण भी शामिल थे।</p>', 'upload/products/thumbnail/1700175843613031.jpeg', 1, NULL, 1, NULL, 1, '2021-05-19 03:17:16', NULL),
(19, 1, 12, 21, 50, 'Freya 7.5L Portable Car Refrigerator Electric Cooler', 'ফ্রেয়া 7.5 এল পোর্টেবল কার রেফ্রিজারেটর ইলেকট্রিক কুলার', 'Freya 7.5L पोर्टेबल कार रेफ्रिजरेटर इलेक्ट्रिक कूलर', 'freya-7.5l-portable-car-refrigerator-electric-cooler', 'ফ্রেয়া 7.5 এল পোর্টেবল কার রেফ্রিজারেটর ইলেকট্রিক কুলার', 'Freya 7.5L पोर्टेबल कार रेफ्रिजरेटर इलेक्ट्रिक कूलर', '458770', '50', 'Cooler ,Refrigerator', 'Refrigerator,Cooler', 'Refrigerator,Cooler', '7.5L', '7.5L', '7.5L', 'Blue, Grey', 'Blue, Grey', 'Blue, Grey', '5999', '2999', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একজন পাঠক একটি পৃষ্ঠার বিন্যাস দেখার সময় তার পঠনযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে।', 'यह एक लंबे समय से स्थापित तथ्य यह है कि एक पाठक अपने लेआउट को देखते समय एक पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially&nbsp;</p>', '<p>লোরেম ইপ্সুম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপ্সুম 1500 এর দশকের পর থেকে শিল্পের স্ট্যান্ডার্ড ডামি টেক্সট ছিল, যখন একটি অজানা প্রিন্টার টাইপের একটি গ্যালি নিয়ে একটি ধরণের নমুনা বই তৈরি করতে স্ক্র্যাম্বল করেছিল। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটিং-এ লাফ ও মূলত অবশিষ্ট রয়েছে&nbsp;</p>', '<p>लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का बस डमी पाठ है। Lorem Ipsum 1500s के बाद से कभी उद्योग के मानक डमी पाठ किया गया है, जब एक अज्ञात प्रिंटर प्रकार की एक गैली ले लिया और यह एक प्रकार नमूना पुस्तक बनाने के लिए तले हुए । यह न केवल पांच शताब्दियों बच गया है, लेकिन यह भी इलेक्ट्रॉनिक टाइपसेटिंग में छलांग, अनिवार्य रूप से शेष&nbsp;</p>', 'upload/products/thumbnail/1704548671619495.jpeg', 1, NULL, 1, NULL, 1, '2021-07-06 09:41:30', NULL),
(20, 1, 12, 19, 42, 'Mi 4A PRO 80 cm (32 inch) HD Ready LED Smart Android TV', 'এমআই 4এ প্রো 80 সেমি (32 ইঞ্চি) এইচডি রেডি এলইডি স্মার্ট অ্যান্ড্রয়েড টিভি', 'Mi 4A PRO 80 सेमी (32 इंच) एचडी रेडी एलईडी स्मार्ट एंड्रॉयड टीवी', 'mi-4a-pro-80-cm-(32-inch)-hd-ready-led-smart-android-tv', 'এমআই 4এ প্রো 80 সেমি (32 ইঞ্চি) এইচডি রেডি এলইডি স্মার্ট অ্যান্ড্রয়েড টিভি', 'Mi 4A PRO 80 सेमी (32 इंच) एचडी रेडी एलईडी स्मार्ट एंड्रॉयड टीवी', '55874', '199', 'Mi,Smart', 'Mi,Smart', 'mi,Smart', '32 inch', '32 inch', '32 inch', 'black', 'black', 'black', '19999', '15999', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একজন পাঠক একটি পৃষ্ঠার বিন্যাস দেখার সময় তার পঠনযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে।', 'यह एक लंबे समय से स्थापित तथ्य यह है कि एक पाठक अपने लेआउट को देखते समय एक पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially&nbsp;</p>', '<p>লোরেম ইপ্সুম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপ্সুম 1500 এর দশকের পর থেকে শিল্পের স্ট্যান্ডার্ড ডামি টেক্সট ছিল, যখন একটি অজানা প্রিন্টার টাইপের একটি গ্যালি নিয়ে একটি ধরণের নমুনা বই তৈরি করতে স্ক্র্যাম্বল করেছিল। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটিং-এ লাফ ও মূলত অবশিষ্ট রয়েছে&nbsp;</p>', '<p>लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का बस डमी पाठ है। Lorem Ipsum 1500s के बाद से कभी उद्योग के मानक डमी पाठ किया गया है, जब एक अज्ञात प्रिंटर प्रकार की एक गैली ले लिया और यह एक प्रकार नमूना पुस्तक बनाने के लिए तले हुए । यह न केवल पांच शताब्दियों बच गया है, लेकिन यह भी इलेक्ट्रॉनिक टाइपसेटिंग में छलांग, अनिवार्य रूप से शेष&nbsp;</p>', 'upload/products/thumbnail/1704549566487316.jpeg', NULL, 1, 1, NULL, 1, '2021-07-06 09:55:42', '2021-07-08 04:29:12'),
(21, 1, 12, 20, 45, 'SAMSUNG 6.5 kg 5 Star Semi Automatic Top Load White, Grey', 'স্যামসাং 6.5 কেজি 5 স্টার সেমি অটোমেটিক টপ লোড হোয়াইট, গ্রে', 'सैमसंग 6.5 किलो 5 स्टार सेमी ऑटोमैटिक टॉप लोड व्हाइट, ग्रे', 'samsung-6.5-kg-5-star-semi-automatic-top-load-white,-grey', 'স্যামসাং 6.5 কেজি 5 স্টার সেমি অটোমেটিক টপ লোড হোয়াইট, গ্রে', 'सैमसंग 6.5 किलो 5 स्टार सेमी ऑटोमैटिक टॉप लोड व्हाइट, ग्रे', '11227', '299', 'Automatic', 'Automatic', 'Automatic', '6.5 kg', '6.5 kg', '6.5 kg', 'white,red', 'white,red', 'white,red', '12600', '9950', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একজন পাঠক একটি পৃষ্ঠার বিন্যাস দেখার সময় তার পঠনযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে।', 'यह एक लंबे समय से स्थापित तथ्य यह है कि एक पाठक अपने लेआउट को देखते समय एक पृष्ठ की पठनीय सामग्री से विचलित हो जाएगा।', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially&nbsp;</p>', '<p>লোরেম ইপ্সুম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপ্সুম 1500 এর দশকের পর থেকে শিল্পের স্ট্যান্ডার্ড ডামি টেক্সট ছিল, যখন একটি অজানা প্রিন্টার টাইপের একটি গ্যালি নিয়ে একটি ধরণের নমুনা বই তৈরি করতে স্ক্র্যাম্বল করেছিল। এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটিং-এ লাফ ও মূলত অবশিষ্ট রয়েছে&nbsp;</p>', '<p>लोरेम इप्सम प्रिंटिंग और टाइपसेटिंग उद्योग का बस डमी पाठ है। Lorem Ipsum 1500s के बाद से कभी उद्योग के मानक डमी पाठ किया गया है, जब एक अज्ञात प्रिंटर प्रकार की एक गैली ले लिया और यह एक प्रकार नमूना पुस्तक बनाने के लिए तले हुए । यह न केवल पांच शताब्दियों बच गया है, लेकिन यह भी इलेक्ट्रॉनिक टाइपसेटिंग में छलांग, अनिवार्य रूप से शेष&nbsp;</p>', 'upload/products/thumbnail/1704550085667914.jpeg', NULL, NULL, 1, 1, 1, '2021-07-06 10:03:58', '2021-07-07 10:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `summery` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `comment`, `summery`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(5, 12, 3, 'This is not very good in Teste', 'Teste is not good', 2, '1', '2021-07-02 01:23:17', '2021-07-02 01:24:01'),
(6, 12, 3, 'It\'s Good but not Amazing', 'It\'s good', 3, '1', '2021-07-02 02:28:00', '2021-07-02 02:28:12'),
(7, 12, 2, 'This is Good Product', 'It\'s Nice', 4, '1', '2021-07-02 02:32:17', '2021-07-02 02:34:09'),
(8, 15, 2, 'This is very nice product', 'Nice product', 4, '1', '2021-07-02 04:07:47', '2021-07-02 04:08:00'),
(9, 16, 2, 'Very Nice product', 'Nice product', 5, '1', '2021-07-02 04:09:05', '2021-07-02 04:09:20'),
(10, 11, 2, 'Really Nice', 'Nice product', 4, '1', '2021-07-02 04:11:47', '2021-07-02 04:12:12'),
(12, 17, 2, 'Really good product', 'Panasonic best product', 4, '1', '2021-07-02 04:22:44', '2021-07-02 04:22:56'),
(13, 21, 5, 'This is very bad product', 'Bad Quality', 2, '1', '2021-07-07 09:47:41', '2021-07-07 09:57:13'),
(14, 21, 6, 'This is nice product', 'Nice Product', 4, '1', '2021-07-07 10:01:54', '2021-07-07 10:25:12'),
(15, 17, 6, 'This is good Product', 'good product', 3, '1', '2021-07-07 10:24:35', '2021-07-07 14:07:56'),
(16, 20, 2, 'This is good Product', 'good product', 3, '1', '2021-07-07 10:29:22', '2021-07-07 10:31:00'),
(17, 5, 6, 'This is nice Product', 'Nice product', 3, '1', '2021-07-07 14:12:52', '2021-07-07 14:13:07'),
(18, 19, 6, 'very nice product', 'nice product', 4, '1', '2021-07-07 14:21:23', '2021-07-07 14:21:36'),
(19, 18, 6, 'This is good product', 'good product', 3, '1', '2021-07-07 14:22:32', '2021-07-07 14:23:04'),
(20, 20, 7, 'This is nice product', 'Nice product', 5, '1', '2021-07-08 04:13:43', '2021-07-08 04:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Easy Online Shop', 'Easy Shop', 'Best Online Shop, Best Product, Best Ecommerce Store', 'MediBuddy helps its users consult specialist doctors, order medicines, and book lab tests from the comfort of their homes. It is also a partner to several leading corporate customers in the country and helps its employees access multiple healthcare benefits.', 'MediBuddy helps its users consult specialist doctors, order medicines, and book lab tests from the comfort of their homes. It is also a partner to several leading corporate customers in the country and helps its employees access multiple healthcare benefits.', NULL, '2021-06-08 14:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8zPpahDSlR4F38jwq9R1S1NDR1s92aM7ORLV0cdz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3hMOUpNQTdvT2FIZm1yclNkWWNBeWJaaFd0SHNSUkdjYVc0aDFrViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1625764962);

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(8, 13, 'Paschim Burdwan', '2021-06-24 02:07:17', NULL),
(9, 7, 'Howrah', '2021-06-24 02:07:33', NULL),
(10, 9, 'Hoogly', '2021-06-24 02:07:51', NULL),
(11, 11, 'Paschim Burdwan', '2021-06-24 02:08:02', NULL),
(12, 8, 'Howrah', '2021-06-24 02:08:13', NULL),
(13, 12, 'Paschim Burdwan', '2021-06-24 02:08:26', NULL),
(14, 10, 'Hoogly', '2021-06-24 02:08:42', NULL),
(15, 15, 'Central Delhi', '2021-06-24 13:30:29', NULL),
(16, 16, 'East Delhi', '2021-06-24 13:31:31', NULL),
(17, 14, 'New Delhi', '2021-06-24 13:33:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(7, 'Bally', '2021-06-24 02:05:18', NULL),
(8, 'Panchla', '2021-06-24 02:05:36', NULL),
(9, 'Chandannagar', '2021-06-24 02:05:55', NULL),
(10, 'Srirampur', '2021-06-24 02:06:08', NULL),
(11, 'Durgapur', '2021-06-24 02:06:22', NULL),
(12, 'Raniganj', '2021-06-24 02:06:30', NULL),
(13, 'Asansol', '2021-06-24 02:06:41', NULL),
(14, 'Vasantvihar', '2021-06-24 13:27:12', NULL),
(15, 'Kotwali', '2021-06-24 13:27:43', NULL),
(16, 'Preetvihar', '2021-06-24 13:28:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(7, 13, 8, 'West Bengal', '2021-06-24 02:09:07', NULL),
(8, 7, 9, 'West Bengal', '2021-06-24 02:09:16', NULL),
(9, 9, 10, 'West Bengal', '2021-06-24 02:09:27', NULL),
(10, 11, 11, 'West Bengal', '2021-06-24 02:09:36', NULL),
(11, 8, 12, 'West Bengal', '2021-06-24 02:09:44', NULL),
(12, 12, 13, 'West Bengal', '2021-06-24 02:09:53', NULL),
(13, 10, 14, 'West Bengal', '2021-06-24 02:10:01', NULL),
(14, 15, 15, 'Delhi', '2021-06-24 13:36:00', NULL),
(15, 16, 16, 'Delhi', '2021-06-24 13:36:22', NULL),
(16, 14, 17, 'Delhi', '2021-06-24 13:36:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youTube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `phone_one`, `phone_two`, `email`, `company_name`, `company_address`, `facebook`, `twitter`, `linkedIn`, `youTube`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1702025619690942.png', '6297544014', '7797076418', 'duttasubhankar999@gmail.com', 'Easy Shop', 'D.V.C Para , Pandaveswar', 'http://facebook/ele', 'http://twitter/ele', 'http://linkedin/ele', 'http://youtube/ele', NULL, '2021-06-08 13:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ben` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_hin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ben` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_hin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `title_en`, `title_ben`, `title_hin`, `description_en`, `description_ben`, `description_hin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/slider/1704509127465438.jpg', 'First Slider Title', NULL, NULL, 'First Slider Description', NULL, NULL, 1, NULL, '2021-07-05 23:19:24'),
(2, 'upload/slider/1704511033911868.jpg', 'Second  Slider Title Test', 'দ্বিতীয় স্লাইডার শিরোনাম', 'दूसरा स्लाइडर शीर्षक', 'Second  Slider Description', 'দ্বিতীয় স্লাইডার বর্ণনা', 'दूसरा स्लाइडर विवरण', 1, NULL, '2021-07-05 23:43:15'),
(3, 'upload/slider/1704511082552883.png', 'Third Slider Title', 'তৃতীয় স্লাইডার শিরোনাম', 'तीसरा स्लाइडर शीर्षक', 'Third Slider Description', 'তৃতীয় স্লাইডার বর্ণনা', 'तीसरा स्लाइडर विवरण', 1, NULL, '2021-07-05 23:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name_en`, `subcategory_name_ben`, `subcategory_name_hin`, `subcategory_slug_en`, `subcategory_slug_ben`, `subcategory_slug_hin`, `created_at`, `updated_at`) VALUES
(9, 11, 'Mans Top Ware', 'ম্যানস টপ ওয়েয়ার', 'मैन्स टॉप वेयर', 'mans-top-ware', 'ম্যানস টপ ওয়েয়ার', 'मैन्स टॉप वेयर', NULL, '2021-05-14 03:10:10'),
(10, 11, 'Mans Bottom Ware', 'মনস বটম ওয়েয়ার', 'मैन्स बॉटम वेयर', 'mans-bottom-ware', 'মনস বটম ওয়েয়ার', 'मैन्स बॉटम वेयर', NULL, '2021-05-14 03:10:59'),
(11, 11, 'Mans Footwear', 'পুরুষদের পাদুকা', 'पुरुषों के जूते', 'mans-footwear', 'পুরুষদের পাদুকা', 'पुरुषों के जूते', NULL, '2021-05-14 03:11:58'),
(12, 11, 'Women Footwear', 'মহিলা পাদুকা', 'महिलाओं के जूते', 'women-footwear', 'মহিলা পাদুকা', 'महिलाओं के जूते', NULL, '2021-05-14 03:12:29'),
(13, 13, 'Computer Peripherals', 'কম্পিউটার যন্ত্রানুষঙ্গ', 'कंप्यूटर सहायक उपकरण', 'computer-peripherals', 'কম্পিউটার যন্ত্রানুষঙ্গ', 'कंप्यूटर सहायक उपकरण', NULL, '2021-05-14 03:06:33'),
(14, 13, 'Mobile Accessory', 'মোবাইল আনুষাঙ্গিক', 'मोबाइल एक्सेसरी', 'mobile-accessory', 'মোবাইল আনুষাঙ্গিক', 'मोबाइल एक्सेसरी', NULL, '2021-05-14 03:07:06'),
(15, 13, 'Gaming', 'গেমিং', 'जुआ', 'gaming', 'গেমিং', 'जुआ', NULL, '2021-05-14 03:07:44'),
(16, 14, 'Home Furnishings', 'বাড়ির আসবাব', 'घर सजाने का सामान', 'home-furnishings', 'বাড়ির আসবাব', 'घर सजाने का सामान', NULL, '2021-05-14 03:03:46'),
(17, 14, 'Living Room', 'লিভিং রুম', 'बैठक कक्ष', 'living-room', 'লিভিং রুম', 'बैठक कक्ष', NULL, '2021-05-14 03:02:02'),
(18, 14, 'Home Decorate', 'হোম সাজসজ্জা', 'गृह सज्जा', 'home-decorate', 'হোম সাজসজ্জা', 'गृह सज्जा', NULL, '2021-05-14 03:03:01'),
(19, 12, 'Televisions', 'টেলিভিশন', 'टेलीविजन', 'televisions', 'টেলিভিশন', 'टेलीविजन', NULL, '2021-05-14 03:08:18'),
(20, 12, 'Washing Machines', 'পরিষ্কারক যন্ত্র', 'वाशिंग मशीन', 'washing-machines', 'পরিষ্কারক যন্ত্র', 'वाशिंग मशीन', NULL, '2021-05-14 03:08:53'),
(21, 12, 'Refrigerators', 'রেফ্রিজারেটর', 'रेफ्रिजरेटर', 'refrigerators', 'রেফ্রিজারেটর', 'रेफ्रिजरेटर', NULL, '2021-05-14 03:09:27'),
(22, 15, 'Beauty and Personal Care', 'সৌন্দর্য এবং ব্যক্তিগত যত্ন', 'सौंदर्य और व्यक्तिगत देखभाल', 'beauty-and-personal-care', 'সৌন্দর্য এবং ব্যক্তিগত যত্ন', 'सौंदर्य और व्यक्तिगत देखभाल', NULL, '2021-05-14 03:04:37'),
(23, 15, 'Food and Drinks', 'খাদ্য এবং পানীয়', 'खाना पीना', 'food-and-drinks', 'খাদ্য এবং পানীয়', 'खाना पीना', NULL, '2021-05-14 03:05:16'),
(24, 15, 'Baby Care', 'শিশুর যত্ন', 'शिशु के देखभाल', 'baby-care', 'শিশুর যত্ন', 'शिशु के देखभाल', NULL, '2021-05-14 03:05:48'),
(25, 11, 'Women Top Ware', 'মহিলা টপওয়্যার', 'महिला टॉपवियर', 'women-top-ware', 'মহিলা টপওয়্যার', 'महिला टॉपवियर', NULL, '2021-05-19 02:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `subsubcategories`
--

CREATE TABLE `subsubcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_ben` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subsubcategories`
--

INSERT INTO `subsubcategories` (`id`, `category_id`, `subcategory_id`, `subsubcategory_name_en`, `subsubcategory_name_ben`, `subsubcategory_name_hin`, `subsubcategory_slug_en`, `subsubcategory_slug_ben`, `subsubcategory_slug_hin`, `created_at`, `updated_at`) VALUES
(11, 11, 9, 'Mans Tshirt', 'মনস টিশার্ট', 'मैन टीशर्ट', 'mans-tshirt', 'মনস টিশার্ট', 'मैन टीशर्ट', NULL, NULL),
(12, 11, 9, 'Mans Casual Shirts', 'মানস নৈমিত্তিক শার্ট', 'मैन्स कैजुअल शर्ट्स', 'mans-casual-shirts', 'মানস নৈমিত্তিক শার্ট', 'मैन्स कैजुअल शर्ट्स', NULL, NULL),
(13, 11, 9, 'Mans Kurtas', 'আমার কার্ট', 'मेरी कुर्ती', 'mans-kurtas', 'আমার কার্ট', 'मेरी कुर्ती', NULL, NULL),
(14, 11, 10, 'Mans Jeans', 'মেনস জিন্স', 'मेन्स जींस', 'mans-jeans', 'মেনস জিন্স', 'मेन्स जींस', NULL, NULL),
(15, 11, 10, 'Mans Trousers', 'মানস ট্রাউজার্স', 'मैंस ट्राउजर्स', 'mans-trousers', 'মানস ট্রাউজার্স', 'मैंस ट्राउजर्स', NULL, NULL),
(16, 11, 10, 'Mans Cargos', 'হাত চার্জ', 'हैंड्स चार्ज', 'mans-cargos', 'হাত চার্জ', 'हैंड्स चार्ज', NULL, NULL),
(17, 11, 11, 'Mans Sports Shoes', 'ম্যানস স্পোর্টস জুতা', 'मैन्स स्पोर्ट्स शूज़', 'mans-sports-shoes', 'ম্যানস স্পোর্টস জুতা', 'मैन्स स्पोर्ट्स शूज़', NULL, NULL),
(18, 11, 11, 'Mens Casual Shoes', 'মেনস ক্যাজুয়াল জুতো', 'पुरुषों के आरामदायक जूते', 'mens-casual-shoes', 'মেনস ক্যাজুয়াল জুতো', 'पुरुषों के आरामदायक जूते', NULL, NULL),
(19, 11, 11, 'Mens Formal Shoes', 'মেনস ফর্মাল জুতো', 'पुरुषों के औपचारिक जूते', 'mens-formal-shoes', 'মেনস ফর্মাল জুতো', 'पुरुषों के औपचारिक जूते', NULL, NULL),
(20, 11, 12, 'Women Flats', 'মহিলা ফ্ল্যাট', 'महिला फ्लैट', 'women-flats', 'মহিলা ফ্ল্যাট', 'महिला फ्लैट', NULL, NULL),
(21, 11, 12, 'Women Heels', 'মহিলা হিলস', 'महिला ऊँची एड़ी के जूते', 'women-heels', 'মহিলা হিলস', 'महिला ऊँची एड़ी के जूते', NULL, NULL),
(22, 11, 12, 'Woman Sheakers', 'মহিলা স্নিকার্স', 'महिला स्नीकर्स', 'woman-sheakers', 'মহিলা স্নিকার্স', 'महिला स्नीकर्स', NULL, NULL),
(23, 13, 13, 'Printers', 'মুদ্রক', 'प्रिंटर', 'printers', 'মুদ্রক', 'प्रिंटर', NULL, NULL),
(24, 13, 13, 'Monitors', 'মনিটর', 'पर नज़र रखता है', 'monitors', 'মনিটর', 'पर नज़र रखता है', NULL, NULL),
(25, 13, 13, 'Projectors', 'প্রজেক্টর', 'प्रोजेक्टर', 'projectors', 'প্রজেক্টর', 'प्रोजेक्टर', NULL, NULL),
(26, 13, 14, 'Plain Cases', 'সরল মামলা', 'सादे मामले', 'plain-cases', 'সরল মামলা', 'सादे मामले', NULL, NULL),
(27, 13, 14, 'Designer Cases', 'ডিজাইনার কেস', 'डिजाइनर मामले', 'designer-cases', 'ডিজাইনার কেস', 'डिजाइनर मामले', NULL, NULL),
(28, 13, 14, 'Screen Guards', 'স্ক্রিন গার্ডস', 'स्क्रीन गार्ड', 'screen-guards', 'স্ক্রিন গার্ডস', 'स्क्रीन गार्ड', NULL, NULL),
(29, 13, 15, 'Gaming Mouse', 'গেমিং মাউস', 'गेमिंग माउस', 'gaming-mouse', 'গেমিং মাউস', 'गेमिंग माउस', NULL, NULL),
(30, 13, 15, 'Gaming Keyboards', 'গেমিং কীবোর্ড', 'गेमिंग कीबोर्ड', 'gaming-keyboards', 'গেমিং কীবোর্ড', 'गेमिंग कीबोर्ड', NULL, NULL),
(31, 13, 15, 'Gaming Mousepads', 'গেমিং মাউসপ্যাডস', 'गेमिंग माउसपैड', 'gaming-mousepads', 'গেমিং মাউসপ্যাডস', 'गेमिंग माउसपैड', NULL, NULL),
(32, 14, 16, 'Bed Liners', 'বিছানা', 'बेड लाइनर', 'bed-liners', 'বিছানা', 'बेड लाइनर', NULL, NULL),
(33, 14, 16, 'Bedsheets', 'বিছানার চাদর', 'चादरे', 'bedsheets', 'বিছানার চাদর', 'चादरे', NULL, NULL),
(34, 14, 16, 'Blankets', 'কম্বল', 'कम्बल', 'blankets', 'কম্বল', 'कम्बल', NULL, NULL),
(35, 14, 17, 'Tv Units', 'টিভি ইউনিট', 'टीवी इकाइयाँ', 'tv-units', 'টিভি ইউনিট', 'टीवी इकाइयाँ', NULL, NULL),
(36, 14, 17, 'Dining Sets', 'ডাইনিং সেট', 'डाइनिंग सेट', 'dining-sets', 'ডাইনিং সেট', 'डाइनिंग सेट', NULL, NULL),
(37, 14, 17, 'Coffee Tables', 'কফি টেবিল', 'कॉफ़ी मेज़', 'coffee-tables', 'কফি টেবিল', 'कॉफ़ी मेज़', NULL, NULL),
(38, 14, 18, 'Lightings', 'আলোকসজ্জা', 'रोशनी', 'lightings', 'আলোকসজ্জা', 'रोशनी', NULL, NULL),
(39, 14, 18, 'Clocks', 'ঘড়ি', 'घड़ियों', 'clocks', 'ঘড়ি', 'घड़ियों', NULL, NULL),
(40, 14, 18, 'Wall Decor', 'ওয়াল সজ্জা', 'दीवार की सजावट', 'wall-decor', 'ওয়াল সজ্জা', 'दीवार की सजावट', NULL, NULL),
(41, 12, 19, 'Big Screen TVs', 'বড় স্ক্রিন টিভি', 'बिग स्क्रीन टीवी', 'big-screen-tvs', 'বড় স্ক্রিন টিভি', 'बिग स्क्रीन टीवी', NULL, NULL),
(42, 12, 19, 'Smart TVs', 'স্মার্ট টিভি', 'स्मार्ट टीवी', 'smart-tvs', 'স্মার্ট টিভি', 'स्मार्ट टीवी', NULL, NULL),
(43, 12, 19, 'OLED TVs', 'ওএলইডি টিভি', 'OLED टीवी', 'oled-tvs', 'ওএলইডি টিভি', 'OLED टीवी', NULL, NULL),
(45, 12, 20, 'Washer Dryers', 'ওয়াশার ড্রায়ার্স', 'वॉशर ड्रायर्स', 'washer-dryers', 'ওয়াশার ড্রায়ার্স', 'वॉशर ड्रायर्स', NULL, NULL),
(46, 12, 20, 'Washer Only', 'কেবল ওয়াশার', 'वॉशर ओनली', 'washer-only', 'কেবল ওয়াশার', 'वॉशर ओनली', NULL, NULL),
(47, 12, 20, 'Energy Efficient', 'দক্ষ শক্তি', 'ऊर्जा से भरपूर', 'energy-efficient', 'দক্ষ শক্তি', 'ऊर्जा से भरपूर', NULL, NULL),
(48, 12, 21, 'Single Door', 'একক দরজা', 'सिंगल डोर', 'single-door', 'একক দরজা', 'सिंगल डोर', NULL, NULL),
(49, 12, 21, 'Double Door', 'দ্বৈত দরজা', 'दोहरा दरवाज़ा', 'double-door', 'দ্বৈত দরজা', 'दोहरा दरवाज़ा', NULL, NULL),
(50, 12, 21, 'Mini Refrigerators', 'মিনি রেফ্রিজারেটর', 'मिनी रेफ्रिजरेटर', 'mini-refrigerators', 'মিনি রেফ্রিজারেটর', 'मिनी रेफ्रिजरेटर', NULL, NULL),
(51, 15, 22, 'Eyes Makeup', 'আইস মেকআপ', 'आंखों का मेकअप', 'eyes-makeup', 'আইস মেকআপ', 'आंखों का मेकअप', NULL, NULL),
(52, 15, 22, 'Lip Makeup', 'ঠোঁট মেকআপ', 'लिप मेकअप', 'lip-makeup', 'ঠোঁট মেকআপ', 'लिप मेकअप', NULL, NULL),
(53, 15, 22, 'Hair Care', 'চুলের যত্ন', 'बालों की देखभाल', 'hair-care', 'চুলের যত্ন', 'बालों की देखभाल', NULL, NULL),
(54, 15, 23, 'Beverages', 'পানীয়', 'पेय', 'beverages', 'পানীয়', 'पेय', NULL, NULL),
(55, 15, 23, 'Chocolates', 'চকোলেট', 'चॉकलेट', 'chocolates', 'চকোলেট', 'चॉकलेट', NULL, NULL),
(56, 15, 23, 'Snacks', 'নাস্তা', 'नाश्ता', 'snacks', 'নাস্তা', 'नाश्ता', NULL, NULL),
(57, 15, 24, 'Baby Diapers', 'শিশুর ডায়াপার', 'शिशु का डायपर', 'baby-diapers', 'শিশুর ডায়াপার', 'शिशु का डायपर', NULL, NULL),
(58, 15, 24, 'Baby Wipes', 'বাচ্চার কান্না', 'बेबी वाइप्स', 'baby-wipes', 'বাচ্চার কান্না', 'बेबी वाइप्स', NULL, NULL),
(59, 15, 24, 'Baby Food', 'শিশু খাদ্য', 'बच्चों का खाना', 'baby-food', 'শিশু খাদ্য', 'बच्चों का खाना', NULL, NULL),
(60, 13, 14, 'Mobile', 'মুঠোফোন', 'मोबाइल', 'mobile', 'মুঠোফোন', 'मोबाइल', NULL, NULL),
(61, 11, 25, 'Women Tshirt', 'মহিলা টি শার্ট', 'महिला टी शर्ट', 'women-tshirt', 'মহিলা টি শার্ট', 'महिला टी शर्ट', NULL, NULL),
(62, 11, 25, 'Mans Casual Shirts', 'মানস নৈমিত্তিক শার্ট', 'मैंस कैजुअल शर्ट्स', 'mans-casual-shirts', 'মানস নৈমিত্তিক শার্ট', 'मैंस कैजुअल शर्ट्स', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `last_seen`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user2', 'user@gmail.com', '4785421477', '2021-06-10 06:03:02', NULL, '$2y$10$PIw6VBKxlF64xt3077MJUeDlnrW2PLSvjKSTuLRpkdzE1aJ6PyyCO', NULL, NULL, 'FdlWlepZYuv1tWyEXNhInlrwJU1d7z6MjuWq7wtkW7oinT2LWYt5U0iPU473', NULL, '202105101807avatar-9.png', '2021-04-30 06:03:23', '2021-06-10 00:33:02'),
(2, 'Subhankar Dutta', 'subho@gmail.com', '9578965412', '2021-07-08 16:10:35', NULL, '$2y$10$6kOZbeLEemaZp/UQFjKiI.mfshu0cMRMmSGGMlsaZyG3BoTR1jh5i', NULL, NULL, 'SOatGmJ2rJ9pyQXbHFPjRXBQYoA9Ib7hEnJIphyOnsqyZMLD8yAix9tT9g5t', NULL, '202105101812avatar-6.png', '2021-05-09 01:41:07', '2021-07-08 10:40:35'),
(3, 'Moumita Dutta', 'moumita@gmail.com', '7854122441', '2021-07-02 08:00:02', NULL, '$2y$10$Y8.5ip8I/Mkh5gH6FhZJm.CFt/5uSh3XlCeiA0OxvbQBQPR098yHC', NULL, NULL, 'h2v89Lrc3ngluugd03AEX4qLdAy2FSFJXX2FIVgoNVbBXDcDyVc10Uhht66N', NULL, '202106261018avatar-5.png', '2021-05-20 09:49:59', '2021-07-02 02:30:02'),
(4, 'kajal', 'kajal@gmail.com', '45877745', '2021-06-25 19:46:01', NULL, '$2y$10$3dd4iH7dv/Kcd87L5ohaLezl7NW8Vwzi2YRP4UzLzaeONLGzS8WfS', NULL, NULL, NULL, NULL, '202106251837avatar-10.png', '2021-06-12 00:29:14', '2021-06-25 14:16:01'),
(5, 'Susmita Pal', 'susmita@gmail.com', '8754220000', '2021-07-07 15:29:07', NULL, '$2y$10$VFC.gnrYZv1fn1pks7KmPuboeM0v5m437TMo71Zb/MoSGSGSFfydW', NULL, NULL, NULL, NULL, '202106281511avatar-5.png', '2021-06-28 09:34:35', '2021-07-07 09:59:07'),
(6, 'Anindita', 'anindita@gmail.com', '7854411220', '2021-07-07 20:21:12', NULL, '$2y$10$wX0rYA5YlpAVjkiSZ49v6ObVi0PHIpp0eKRlLfarNfks1F2cxj6gC', NULL, NULL, NULL, NULL, '202107071410avatar-16.png', '2021-07-07 08:38:25', '2021-07-07 14:51:12'),
(7, 'Arijit Dutta', 'arijit@gmail.com', '5587455200', '2021-07-08 10:06:37', NULL, '$2y$10$oJsbxTcQ3UltDwxeYx.czODY9hdl7cFovZZ48RSu7hY7B.7LoQsxy', NULL, NULL, NULL, NULL, '202107080928avatar-1.png', '2021-07-08 03:55:04', '2021-07-08 04:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 2, 17, '2021-05-23 13:10:51', NULL),
(3, 1, 12, '2021-05-23 13:13:39', NULL),
(4, 3, 10, '2021-05-23 13:19:39', NULL),
(7, 3, 16, '2021-05-23 23:37:25', NULL),
(9, 4, 10, '2021-06-25 13:10:03', NULL),
(11, 2, 20, '2021-07-08 10:33:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsubcategories`
--
ALTER TABLE `subsubcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subsubcategories`
--
ALTER TABLE `subsubcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
