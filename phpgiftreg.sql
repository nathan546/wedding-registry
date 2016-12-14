-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2016 at 09:44 PM
-- Server version: 5.5.49-0+deb7u1
-- PHP Version: 5.4.45-0+deb7u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpgiftreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`categoryid` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `category`) VALUES
(1, 'Books'),
(2, 'Music'),
(3, 'Video Games'),
(4, 'Clothing'),
(5, 'Movies/DVD'),
(6, 'Gift Certificates'),
(7, 'Hobbies'),
(8, 'Household'),
(9, 'Electronics'),
(10, 'Ornaments/Figurines'),
(11, 'Automotive'),
(13, 'Jewellery'),
(14, 'Computer'),
(15, 'Games'),
(16, 'Tools');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`itemid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `price` decimal(7,2) DEFAULT NULL,
  `source` varchar(255) NOT NULL DEFAULT '',
  `ranking` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `comment` text,
  `status` int(1) NOT NULL,
  `status_id` int(16) NOT NULL,
  `image_filename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `description`, `price`, `source`, `ranking`, `url`, `category`, `comment`, `status`, `status_id`, `image_filename`) VALUES
(23, 'Breville BFP800CBXL Food Processor', 399.00, 'Amazon', 5, 'http://www.amazon.com/Breville-BFP800XL-Sous-Chef-Processor/dp/B005I6ZKCE', 8, '', 0, 1, 'MBNCER.jpg'),
(24, 'KitchenAid KSM150PSES Stand Mixer', 280.00, 'Amazon', 5, 'http://www.amazon.com/KitchenAid-KSM150PSER-Artisan-Pouring-Shield/dp/B00005UP2P', 8, '', 1, 7, 'grzQwo.jpg'),
(25, 'BLACK+DECKER CTO6335S Convection Oven', 65.00, 'Amazon', 5, 'http://www.amazon.com/BLACK-DECKER-CTO6335S-Countertop-Convection/dp/B0043E6PLC', 0, '', 1, 1, 'A5p15o.jpg'),
(26, 'Presto 05420 FryDaddy Electric Deep Fryer', 21.00, 'Amazon', 3, 'http://www.amazon.com/Presto-05420-FryDaddy-Electric-Fryer/dp/B00005KB37', 8, '', 1, 23, 'udP71R.jpg'),
(27, 'Casabella 2-in-1 Veggie Brush', 8.00, 'Amazon', 3, 'http://www.amazon.com/Casabella-Veggie-Brush-Orange-Lime/dp/B00C9DDV6G', 8, '', 0, 0, 'KvUi6a.jpg'),
(28, 'OXO Good Grips Heavy Duty Scrub Brush', 6.00, 'Amazon', 3, 'http://www.amazon.com/OXO-Grips-Heavy-Scrub-Brush/dp/B00004OCLS', 8, 'We could use two of these.', 0, 0, 'YuT10f.jpg'),
(29, 'Casabella Round Dish Brush', 7.00, 'Amazon', 3, 'http://www.amazon.com/Casabella-Round-Scrubber-Assorted-Colors/dp/B0009ET65C', 8, '', 0, 0, 'kt6VDy.jpg'),
(30, 'True Blues Large Blue Ultimate Household Gloves', 12.50, 'Amazon', 3, 'http://www.amazon.com/Blues-Large-Ultimate-Household-Gloves/dp/B0000CFXSN', 8, '', 0, 0, 'uhJYON.jpg'),
(31, 'Lodge 12 in. Cast Iron Skillet', 20.00, 'Target', 4, 'http://www.target.com/p/lodge-cast-iron-pre-seasoned-skillet-12-inch/-/A-10291923?ref=tgt_adv_XS000000&AFID=google_pla_df&CPNG=PLA_Kitchen%2BShopping&adgroup=SC_Kitchen&LID=700000001170770pgs&network=g&device=c&location=9014984&gclid=CO6Z2dK2zcsCFdM2gQodk', 8, '', 1, 23, 'MU6XAd.jpg'),
(32, 'Lodge Color EC6D43 Enameled Cast Iron Dutch Oven, 6-Quart', 70.00, 'Amazon', 5, 'http://www.amazon.com/Lodge-EC6D43-Enameled-Island-6-Quart/dp/B000N501BK', 8, '', 1, 49, 'IEAzhN.jpg'),
(33, 'Porcelain Broiler Pan with Chrome Grill', 17.00, 'Amazon', 3, 'http://www.amazon.com/Porcelain-Broiler-Pan-Chrome-Grill/dp/B000FNJ5V2/ref=sr_1_4?s=kitchen&ie=UTF8&qid=1458417417&sr=1-4&keywords=broiler+pan', 0, '', 1, 2, '8g4Ym1.jpg'),
(35, 'Bamboo 6-Piece Utensil', 5.99, 'Bed Bath and Beyond', 5, 'http://www.bedbathandbeyond.com/store/product/totally-bamboo-6-piece-bamboo-utensil-set/1013997764', 8, '', 1, 34, 'aA9C7O.jpeg'),
(36, 'Lodge L8DOT3 Pre-Seasoned Cast-Iron Trivet', 8.00, 'Amazon', 5, 'http://www.amazon.com/gp/product/B00063RXKQ/ref=s9_top_hd_bw_bw4Zp_g79_i1?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=merchandised-search-2&pf_rd_r=1DC6BPYYHQVNE7JRNS1M&pf_rd_t=101&pf_rd_p=454dadb5-90fa-4bf3-aa15-06b25e73ce75&pf_rd_i=13840621', 8, '', 1, 8, 'wz4l3t.jpg'),
(37, 'Silicone Large Pastry Mat', 17.00, 'Amazon', 5, 'http://www.amazon.com/Silicone-Measurements-Non-Slip-Countertop-Rolling/dp/B00IY1C7D0/ref=sr_1_2?ie=UTF8&qid=1460215935&sr=8-2&keywords=rolling+pin+mat', 8, '', 0, 0, 'MvtwMo.jpg'),
(38, 'Deluxe Cake Decorating Set', 0.00, 'Amazon', 5, 'http://www.amazon.com/Wilton-2104-1368-46-Piece-Deluxe-Decorating/dp/B00IE6ZB1U/ref=sr_1_1?s=kitchen&ie=UTF8&qid=1460216727&sr=1-1&keywords=cake+decorating+kit&refinements=p_89%3AWilton', 8, '', 1, 40, 'w6Gz1Z.jpg'),
(39, 'Footed Cake Dome', 20.00, 'Bed Bath and Beyond', 5, 'http://www.bedbathandbeyond.com/1/1/214141-dailyware-glass-6-1-footed-cake-dome.html', 8, '', 1, 7, 'cSApWT.jpg'),
(40, 'OXO Good Grips Box Grater', 18.00, 'Amazon', 5, 'http://www.amazon.com/OXO-Good-Grips-Box-Grater/dp/B0007VO0CQ/ref=zg_bs_289759_8', 8, '', 1, 8, 'Mz0X6B.jpg'),
(41, 'Totally Bamboo Lattice Utensil Holder', 19.00, 'Amazon', 5, 'http://www.amazon.com/Totally-Bamboo-Lattice-Utensil-Holder/dp/B002RL9CR2/ref=sr_1_76_m?s=kitchen&ie=UTF8&qid=1460218964&sr=1-76', 8, '', 1, 34, 'kExRik.jpg'),
(42, 'Ramekins', 30.00, 'Amazon', 5, 'http://www.amazon.com/Pioneer-Woman-Market-Ramekins-Colors/dp/B015PPYVH2/ref=sr_1_15?s=kitchen&ie=UTF8&qid=1463844583&sr=1-15&keywords=Creme+Brulee+Ramekins', 0, '', 0, 0, 'iecbIg.jpg'),
(43, 'Stainless Steel Colanders, Set of 3', 16.00, 'Amazon', 5, 'http://www.amazon.com/ExcelSteel-Stainless-Steel-Colanders-Set/dp/B00FEDLBII/ref=sr_1_4?s=kitchen&ie=UTF8&qid=1460219812&sr=1-4&keywords=colander', 8, '', 1, 14, '8bhdmf.jpg'),
(44, 'OXO Good Grips Large Silicone Basting Brush', 12.00, 'Amazon', 5, 'http://www.amazon.com/OXO-Grips-Large-Silicone-Basting/dp/B000QJE4HA', 8, '', 0, 0, 'EiA7bz.jpg'),
(45, 'Aprons', 10.00, 'Amazon', 5, 'http://www.amazon.com/Bistro-Garden-Craftsmen-Professional-Apron-Black-Polyester/dp/B008F0DQLW/ref=sr_1_3?s=home-garden&ie=UTF8&qid=1460220958&sr=1-3&keywords=apron+for+men', 0, '', 1, 8, 'WTxWGW.jpg'),
(46, 'Butter Dish', 21.00, 'Amazon', 5, 'http://www.amazon.com/Creative-Co-op-DA4866-Stoneware-Shaped/dp/B013GZ451U/ref=sr_1_1?s=kitchen&ie=UTF8&qid=1460243812&sr=1-1&keywords=whale+butter+dish', 8, '', 1, 34, 'mr6jfN.jpg'),
(47, 'Picture Frame Set', 36.00, 'Amazon', 5, 'http://www.amazon.com/MCS-Industries-Solid-Frame-65508/dp/B009EQJDD6/ref=sr_1_1?s=home-garden&ie=UTF8&qid=1460300664&sr=1-1&keywords=picture+frames', 8, '', 1, 2, 'y6EpxB.jpg'),
(48, 'Full Length Wood Cheval Floor Mirror', 50.00, 'Amazon', 5, 'http://www.amazon.com/Legacy-Decor-Swivel-Length-Cheval/dp/B00GO8DR6G/ref=sr_1_4?s=home-garden&ie=UTF8&qid=1460301019&sr=1-4&keywords=full+length+mirror&refinements=p_n_material_browse%3A316608011', 8, '', 1, 20, 'CbTDWk.jpg'),
(49, 'Vinyl Shower Curtain with Mesh Pockets', 20.00, 'Bed Bath and Beyond', 5, 'https://m.bedbathandbeyond.com/m/product/vinyl-shower-curtain-with-mesh-pockets/1011988105?categoryId=13475+4294966331+23', 8, '', 0, 0, 'mh4mpa.jpg'),
(50, 'Forest PEVA Shower Curtain in Grey', 15.00, 'Bed Bath and Beyond', 5, 'https://m.bedbathandbeyond.com/m/product/forest-peva-shower-curtain-in-grey/1044779115?categoryId=13475+4294966331+23', 8, '', 1, 8, '8g2b4Q.jpg'),
(51, 'VCNY Serendipity Shower Curtain in Grey/Gold', 20.00, 'Bed Bath and Beyond', 5, 'https://m.bedbathandbeyond.com/m/product/vcny-serendipity-shower-curtain-in-grey-gold/1046606150?categoryId=13475+4294966331+23', 8, '', 0, 0, 'Sxjxt8.jpg'),
(52, 'Curtain Rings', 15.00, 'Bed Bath and Beyond', 5, 'https://m.bedbathandbeyond.com/m/product/titan-trade-neverrust-trade-aluminum-double-roller-hooks-in-chrome-set-of-12/1045682780?categoryId=13477', 8, '', 1, 8, 'yesDh2.jpg'),
(53, 'Curtain Rings', 15.00, 'Bed Bath and Beyond', 5, 'https://m.bedbathandbeyond.com/m/product/titan-trade-neverrust-trade-aluminum-double-roller-hooks-in-chrome-set-of-12/1045682780?categoryId=13477', 8, '', 0, 8, 'Yhc9gV.jpg'),
(54, 'Wayfair Basics Reversible Bath Mat', 21.00, 'Wayfair', 5, 'http://www.wayfair.com/Reversible-Bath-Rug-WFBS1227-WFBS1227.html', 8, 'Grey, 21 by 34', 0, 0, '0sStXP.jpg'),
(56, 'Propane Vapor Torch', 75.00, 'Amazon', 5, 'http://www.amazon.com/Red-Dragon-VT-3-30-Propane/dp/B00004Z2FQ/ref=sr_1_1?ie=UTF8&qid=1463846327&sr=8-1&keywords=500000+btu+dragon+torch', 8, '', 1, 2, 'oAirzb.jpg'),
(57, 'Nordic Ware Microwave 10.5 Inch Spatter Cover', 5.95, 'Amazon', 3, 'http://www.amazon.com/gp/product/B000BOA2D0/ref=pd_lpo_sbs_dp_ss_1?pf_rd_p=1944687702&pf_rd_s=lpo-top-stripe-1&pf_rd_t=201&pf_rd_i=B001W9BJVC&pf_rd_m=ATVPDKIKX0DER&pf_rd_r=0ENG740EWC9EXCQP6JXB', 8, '', 1, 2, 'YXaYEe.jpg'),
(58, 'Culligan FM-15A Advanced Faucet Filter Kit', 25.99, 'Amazon', 4, 'http://www.amazon.com/Culligan-FM-15A-Advanced-Faucet-Filter/dp/B00006WNMI?SubscriptionId=0K76CZ6RCX2Y05HSNPR2&tag=spp-sdc-top-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B00006WNMI&ascsubtag=water-filters', 8, '', 0, 0, 'QiI1zp.jpg'),
(59, 'Bialetti Trends 5-Quart Pasta Pot', 29.99, 'Bed Bath and Beyond', 4, 'http://www.bedbathandbeyond.com/store/product/bialetti-reg-trends-5-quart-pasta-pots/134413?categoryId=12596', 8, '', 1, 7, 'qAQuEw.jpg'),
(60, 'Rome Pie Iron Set With Storage Bag', 57.28, 'Amazon', 3, 'http://www.amazon.com/Rome-Pie-Iron-Set-Storage/dp/B0052SWL0M/ref=sr_1_5?ie=UTF8&qid=1464915613&sr=8-5&keywords=pie+iron', 8, '', 0, 0, 'iKX4Br.jpg'),
(61, 'Rachael Ray Expandable Lasagna Lugger', 31.11, 'Amazon', 5, 'http://www.amazon.com/Rachael-Ray-Expandable-Lasagna-Lugger/dp/B00G7NVCHE/ref=pd_sim_79_3?ie=UTF8&dpID=51XFoLwYE9L&dpSrc=sims&preST=_AC_UL160_SR160%2C160_&refRID=1R59XFPAQXARZ5C8R4MV', 8, '', 1, 9, '8R2aeX.jpg'),
(62, 'Farberware Nonstick Bakeware 3-Piece Cookie Pan Set', 30.00, 'Amazon', 4, 'http://www.amazon.com/Farberware-Nonstick-Bakeware-3-Piece-Cookie/dp/B001TE3MKG/ref=sr_1_6?s=kitchen&ie=UTF8&qid=1464916807&sr=1-6&keywords=cookie+sheet', 8, '', 1, 40, '26pwAt.jpg'),
(63, '24 X 36-in Blue Birds Branch Studio Art', 29.99, 'at home', 3, 'http://www.athome.com/24-x-36-in-blue-birds-branch-studio-art/124144833.html#start=189', 8, '', 0, 0, 'a8KZ7I.jpg'),
(64, 'Images Roll Over Image to Zoom View Larger Prev      37 X 17-in Leaf Over The Door Décor  Next 37 X 17-in Leaf Over The Door Décor', 39.99, 'at home', 3, 'http://www.athome.com/37-x-17-in-leaf-over-the-door-d%C3%A9cor/124134259.html', 8, '', 0, 0, 'qznCYs.jpg'),
(65, 'Autumn Tree Painting', 369.00, 'Etsy', 4, 'https://www.etsy.com/listing/210744497/original-autumn-tree-painting-abstract?ga_order=most_relevant&ga_search_type=all&ga_view_type=gallery&ga_search_query=&ref=sr_gallery_5', 8, '', 0, 0, 'Idh0CC.jpg'),
(68, 'Water Scene Painting', 250.00, 'Etsy', 4, 'https://www.etsy.com/listing/168882727/art-painting-canvas-art-landscape?ga_order=most_relevant&ga_search_type=all&ga_view_type=gallery&ga_search_query=&ref=sr_gallery_2', 8, '', 0, 0, 'c3GsR8.jpg'),
(69, 'Elinor Luna “Blossom Song" Canvas Print', 72.99, 'Bed Bath and Beyond', 4, 'http://www.bedbathandbeyond.com/store/product/elinor-luna-blossom-song-canvas-print/1041938928?categoryId=14288', 8, '', 1, 9, '8TzaEp.jpg'),
(70, 'Prinz Whitman Silver Metal Branch Frame', 12.99, 'Bed Bath and Beyond', 3, 'http://www.bedbathandbeyond.com/store/product/prinz-whitman-silver-metal-branch-frame/3243944?categoryId=12173', 8, '', 0, 0, 'EidgmJ.jpg'),
(71, 'DC America UBP18181-BR 18-Inch Cast Stone Umbrella Base', 36.03, 'Amazon', 3, 'http://www.amazon.com/America-UBP18181-BR-Umbrella-Composite-Materials/dp/B0025VP5J8/ref=lp_13819031_1_1?s=lawn-garden&ie=UTF8&qid=1465264166&sr=1-1', 8, '', 0, 0, 'Qh3oMK.jpg'),
(72, 'Garden Hose Nozzle', 24.95, 'Amazon', 3, 'https://www.amazon.com/Garden-Hose-Nozzle-Hand-Sprayer/dp/B00E5SA10M/ref=sr_1_5?s=lawn-garden&ie=UTF8&qid=1465747707&sr=1-5&keywords=hose+sprayer', 8, '', 0, 0, 'a2r9Hy.jpg'),
(73, 'Flexrake Cultivator', 24.13, 'Amazon', 3, 'https://www.amazon.com/Flexrake-1000L-Hula-Ho-Cultivator-54-Inch/dp/B000UGOBSQ/ref=lp_3753661_1_1?s=lawn-garden&ie=UTF8&qid=1465747902&sr=1-1', 8, '', 0, 0, 'STd7In.jpg'),
(74, 'Epica Compost Bin', 21.50, 'Amazon', 3, 'https://www.amazon.com/Epica-Stainless-Steel-Compost-Gallon/dp/B00AMNCYNQ/ref=sr_1_3?ie=UTF8&qid=1465748262&sr=8-3&keywords=kitchen+compost+bin', 8, '', 0, 0, 'KYKJEe.jpg'),
(75, 'Hand Towels (pack of 6)', 23.34, 'Amazon', 3, 'https://www.amazon.com/Luxury-Hotel-Genuine-Turkish-Cotton/dp/B00IOWFCD6/ref=sr_1_2?s=bedbath&ie=UTF8&qid=1465748941&sr=1-2&refinements=p_n_material_browse%3A316533011', 8, '', 1, 2, 'EhCcKD.jpg'),
(76, 'OXO Toothbrush Organizer', 19.99, 'Amazon', 3, 'https://www.amazon.com/OXO-Toothbrush-Organizer-Brushed-Stainless/dp/B003M8GMUO/ref=sr_1_6?s=home-garden&ie=UTF8&qid=1465749689&sr=1-6&keywords=toothbrush+holder', 8, '', 0, 0, '2FeQlo.jpg'),
(77, 'KitchenAid Hand Mixer', 80.00, 'Amazon', 5, 'https://www.amazon.com/dp/B00CPSNCM8', 8, '', 1, 7, 'evWrXx.jpg'),
(78, 'Dish Drying Mat', 17.49, 'Amazon', 3, 'https://www.amazon.com/Coop-Home-Goods-Reversible-Microfiber/dp/B00RUB9W8S/ref=sr_1_5?s=kitchen&ie=UTF8&qid=1466036806&sr=1-5&keywords=drying+mat', 8, '', 0, 0, 'GrUl62.jpg'),
(79, 'Wilton 570-1121 Easy Flex 3-Piece Silicone Spatula Set', 7.99, 'Amazon', 3, 'https://www.amazon.com/Wilton-570-1121-3-Piece-Silicone-Spatula/dp/B000M8YMEU/', 8, '', 1, 34, 'Mhs1t9.jpg'),
(80, 'OXO Kitchen Funnel', 7.95, 'Amazon', 3, 'https://www.amazon.com/OXO-Grips-3-Piece-Funnel-Strainer/dp/B000079XWD/', 8, '', 1, 2, 'qhytAu.jpg'),
(81, 'Brooklinen King Size Sheet Bundle', 197.25, 'Brooklinen', 5, 'https://www.brooklinen.com/products/classic-hardcore-sheet-set-fqkc?color1=solid-white&color2=solid-smoke&color3=solid-smoke#description-tab', 8, 'King Size, solid white sheets, solid smoke duvet cover and pillowcases', 1, 27, 'GexxaB.jpg'),
(82, 'Brooklinen Duvet', 299.00, 'Brooklinen', 5, 'https://www.brooklinen.com/collections/down-alternative-comforters/products/down-alternative-comforter?variant=6963809347#description-tab', 8, 'All season, king size comforter', 1, 8, 'cRah18.jpg'),
(83, 'Shop Vacuum', 53.00, 'Amazon', 4, 'https://www.amazon.com/Shop-Vac-5986000-5-Gallon-Stainless-Vacuum/dp/B00EPH63K0/ref=sr_1_3?ie=UTF8&qid=1468973750&sr=8-3&keywords=shop+vacuum', 0, '', 1, 20, 'EpkV2o.jpg'),
(84, 'Pastry Cutter', 11.00, 'Amazon', 5, 'https://www.amazon.com/Orblue-Pastry-Cutter-Stainless-Steel/dp/B00SHJE4XU/ref=sr_1_6?ie=UTF8&qid=1468973486&sr=8-6&keywords=butter+cutter', 8, '', 1, 14, '8SYRDb.jpg'),
(85, 'Smart Solar Portsmouth Bird Bath', 102.00, 'Sam''s Club', 4, 'http://www.samsclub.com/sams/portsmouth-solar-birdbath-fountain/197988.ip', 8, '', 0, 0, 'zDDzqm.jpg'),
(86, 'Hummingbird Rain Gauge', 38.99, 'Wayfair or Walmart', 3, 'http://www.wayfair.com/Ancient-Graffiti-Hummingbird-Rain-Gauge-ANCIENT680-JLQ1016.html', 8, '', 0, 0, 'abU8Rq.jpg'),
(87, 'Ice Cream Maker', 70.00, 'Amazon', 5, 'https://www.amazon.com/Cuisinart-ICE-30BC-Indulgence-2-Quart-Automatic/dp/B0006ONQOC/ref=sr_1_3?s=kitchen&ie=UTF8&qid=1468975523&sr=1-3&keywords=ice+cream+maker', 8, '', 1, 8, 'iIuCVI.jpg'),
(88, 'Roomba', 300.00, 'Amazon', 5, 'https://www.amazon.com/iRobot-Roomba-Vacuum-Cleaning-Robot/dp/B008LX6OC6/ref=sr_1_1?ie=UTF8&qid=1468976424&sr=8-1&keywords=roomba', 0, '', 0, 0, 'qztnHu.jpg'),
(89, 'King Size Gray Sonoma Cotton Blanket', 35.99, 'Kohl''s', 3, 'http://www.kohls.com/product/prd-2354929/sonoma-life-style-egyptian-cotton-blanket.jsp?color=Gray', 8, '', 0, 27, 'yKhbLr.jpg'),
(91, 'Boho Boutique Isabella Ruffle Dinner Plate - Set of 4', 22.49, 'Target', 3, 'http://www.target.com/p/boho-boutique-isabella-ruffle-dinner-plate-set-of-4/-/A-50406206', 8, '', 0, 0, 'IHkpKv.jpg'),
(92, 'Boho Boutique Isabella Ruffle Dinner Plate - Set of 4', 22.49, 'Target', 3, 'http://www.target.com/p/boho-boutique-isabella-ruffle-dinner-plate-set-of-4/-/A-50406206', 8, '', 0, 0, 'A3LOz4.jpg'),
(94, 'Boho Boutique Isabella Ruffle Bowl - Set of 4', 18.74, 'Target', 3, 'http://www.target.com/p/boho-boutique-isabella-ruffle-bowl-set-of-4/-/A-50406342', 8, '', 0, 0, 'Q9HgE4.jpg'),
(95, 'Boho Boutique Isabella Ruffle Bowl - Set of 4', 18.74, 'Target', 3, 'http://www.target.com/p/boho-boutique-isabella-ruffle-bowl-set-of-4/-/A-50406342', 8, '', 0, 0, 'sTy0Zi.jpg'),
(96, 'Chopstick Set (Scenery Black Color)', 7.95, 'Amazon', 3, 'https://www.amazon.com/Bamboo-Chopsticks-Crane-Design-Scenery/dp/B001J286C2/ref=lp_13220831_1_15?s=kitchen&ie=UTF8&qid=1469497250&sr=1-15', 8, '', 0, 0, 'oEoj7t.jpg'),
(97, 'Mikasa Cocoa Blossom 65-Piece Stainless Steel Flatware Set with Serveware, Service for 12', 109.99, 'Amazon', 4, 'https://www.amazon.com/Mikasa-65-Piece-Stainless-Flatware-Serveware/dp/B002WOB3R6/ref=sr_1_8?s=kitchen&ie=UTF8&qid=1469497991&sr=1-8&refinements=p_n_feature_keywords_two_browse-bin%3A7060364011', 8, '', 1, 14, 'SmI8O6.jpg'),
(98, 'GermGuardian AC4825, 3-in-1 Air Cleaning System with True HEPA, UV-C and Odor Reduction, 22-Inch', 82.99, 'Amazon', 4, 'https://www.amazon.com/gp/product/B004VGIGVY/ref=s9_top_hd_bw_b28iu_g121_i1?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=merchandised-search-2&pf_rd_r=RBQ7XM2ZT7VP0RQHQNHX&pf_rd_t=101&pf_rd_p=26743b0a-9d98-5010-8c29-f970dbca7e56&pf_rd_i=510192', 8, '', 0, 0, 'aGxHzM.jpg'),
(100, '7 Pocket Shower Caddy Tote (Blue)', 6.99, 'Amazon', 3, 'https://www.amazon.com/Pocket-Shower-Caddy-Tote-Pink/dp/B00Q99LD16/ref=lp_85969011_1_4_m?s=bedbath&ie=UTF8&qid=1469500214&sr=1-4', 8, '', 0, 0, 'SE73Xr.jpg'),
(101, 'Brome 1057 Squirrel Buster Standard Wild Bird Feeder', 33.99, 'Amazon', 3, 'https://www.amazon.com/Brome-Squirrel-Buster-Standard-Feeder/dp/B00ABGSX4S/ref=lp_3563979011_1_6/156-4224380-1557422?s=lawn-garden&ie=UTF8&qid=1469583205&sr=1-6', 8, '', 0, 0, 'MJI97h.jpg'),
(102, 'Gardena ZoomMaxx Oscillating Sprinkler on Weighted Sled Base', 54.90, 'Amazon', 3, 'https://www.amazon.com/GARDENA-ZoomMaxx-Oscillating-Sprinkler-Weighted/dp/B00CRF2QD0', 8, '', 0, 0, 'CNc9LA.jpg'),
(103, 'Bamboo Expandabtopia Kitcle Utility-Drawer Utensil Organizer - 8 Compartments', 22.99, 'Amazon', 3, 'https://www.amazon.com/dp/B019CNERUE/ref=sxr_pa_click_within_right_3?pf_rd_t=301&pf_rd_m=ATVPDKIKX0DER&pf_rd_p=2329824862&pf_rd_i=cutlery+tray&pf_rd_r=N5R2AD8HFJBNXJ2GRTJ8&pf_rd_s=desktop-rhs-carousels&psc=1', 8, '', 0, 0, 'kFsFCl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE IF NOT EXISTS `ranks` (
`ranking` int(11) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `rendered` varchar(255) NOT NULL DEFAULT '',
  `rankorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`ranking`, `title`, `rendered`, `rankorder`) VALUES
(1, '1 - Wouldn''t mind it', '<img src="images/star_on.gif" alt="*"><img src="images/star_off.gif" alt=""><img src="images/star_off.gif" alt=""><img src="images/star_off.gif" alt=""><img src="images/star_off.gif" alt="">', 1),
(2, '2 - Would be nice to have', '<img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_off.gif" alt=""><img src="images/star_off.gif" alt=""><img src="images/star_off.gif" alt="">', 2),
(3, '3 - Would make me happy', '<img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_off.gif" alt=""><img src="images/star_off.gif" alt="">', 3),
(4, '4 - I would really, really like this', '<img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_off.gif" alt="">', 4),
(5, '5 - I''d love to get this', '<img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*"><img src="images/star_on.gif" alt="*">', 5);

-- --------------------------------------------------------

--
-- Table structure for table `rsvp_info`
--

CREATE TABLE IF NOT EXISTS `rsvp_info` (
`rsvpid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `rsvp_info`
--

INSERT INTO `rsvp_info` (`rsvpid`, `userid`, `firstname`, `lastname`) VALUES
(10, 1, 'Nathan', 'Barrett'),
(11, 2, 'Erica', 'Morrison'),
(12, 8, 'Shelley', 'Morrison'),
(13, 8, 'Brittany', 'Morrison'),
(14, 8, 'Deryk ', 'Morrison'),
(15, 8, 'Cierra', 'Morrison'),
(16, 16, 'Betty', 'Jette'),
(17, 40, 'Jason', 'Deere'),
(18, 40, 'Beth', 'Deere'),
(19, 40, 'Braden', 'Deere'),
(20, 40, 'Kaitlyn', 'Deere'),
(21, 40, 'Lauren', 'Deere'),
(22, 9, 'Steve', 'Gruetter'),
(23, 9, 'Marilyn', 'Rose'),
(24, 3, 'Arthur', 'Barrett'),
(25, 3, 'Sandy', 'Barrett'),
(26, 3, 'Tyler', 'Barrett'),
(27, 4, 'Sherry', 'Deere'),
(28, 7, 'Nancy', 'Denner'),
(29, 7, 'John ', 'Denner'),
(30, 7, 'David ', 'Denner'),
(31, 5, 'Joyce', 'Barrett Jacobs'),
(32, 5, 'Joseph', 'Patella'),
(33, 43, 'Todd', 'Mercer'),
(34, 43, 'Jeanne', 'Mercer'),
(35, 43, 'Kinzie', 'Mercer'),
(36, 38, 'Ryan', 'Denner'),
(37, 38, 'Alison', 'Denner'),
(38, 45, 'Amber', 'Mercer'),
(39, 45, 'Tim', 'Mercer'),
(40, 45, 'Alex', 'Mercer'),
(41, 45, 'Evan', 'Mercer'),
(42, 39, 'Rebecca', 'Sparks'),
(43, 39, 'David', 'Sparks'),
(44, 39, 'Savannah', 'Sparks'),
(45, 39, 'Briannah ', 'Sparks'),
(46, 39, 'Daniel ', 'Sparks'),
(47, 39, 'David', 'Sparks'),
(48, 39, 'Audrey', 'Baker'),
(49, 42, 'Junior', 'Mercer'),
(50, 46, 'Kenny', 'Sayre'),
(51, 46, 'Sonya', 'Sayre'),
(52, 11, 'Mike', 'Morrison'),
(53, 27, 'Kelley', 'Higginbotham'),
(54, 27, 'Jack ', 'Higginbotham'),
(55, 29, 'Marilyn', 'Rose'),
(56, 14, 'Norma', 'Morrison'),
(57, 14, 'Christopher', 'Morrison'),
(58, 13, 'doug', 'morrison'),
(59, 44, 'Ryley', 'Mercer'),
(60, 44, 'Ryan', 'Bushong'),
(61, 15, 'Melissa', 'Queen'),
(62, 15, 'Tom', 'Queen'),
(63, 37, 'Amanda', 'Molchanow'),
(64, 37, 'Steven ', 'Molchanow'),
(65, 10, 'Judy', 'Morrison'),
(66, 33, 'Barbara', 'Skeens'),
(67, 32, 'Angel', 'Morgan'),
(68, 32, 'Brian', 'Morgan'),
(69, 48, 'Charles', 'Hurt'),
(70, 48, 'Sheridan', 'Spychalski'),
(71, 28, 'Taryn', 'Altmaier'),
(72, 28, 'Curt', 'Byers'),
(73, 28, 'Gage', 'Byers'),
(74, 24, 'Jimi', 'Jette'),
(75, 24, 'Leigh', 'Jette'),
(76, 24, 'Wyatt', 'Jette'),
(77, 25, 'Heather', 'Keplinger'),
(78, 25, 'Luke', 'Keplinger'),
(79, 25, 'James ', 'Keplinger'),
(80, 25, 'Addie', 'Keplinger'),
(81, 20, 'Jennifer', 'Jones'),
(82, 20, 'Herb', 'Jones'),
(83, 23, 'Thomas ', 'Jette'),
(84, 23, 'Kathryn', 'Jette'),
(85, 19, 'Stephen', 'Jette'),
(86, 31, 'Janice', 'Roller'),
(87, 34, 'Christina', 'Miller'),
(88, 34, 'Duane', 'Gandelot'),
(89, 18, 'Martina', 'Hurley'),
(90, 18, 'Robert', 'Hurley'),
(91, 6, 'Michael', 'Taraba'),
(92, 6, 'Jennifer', 'Jacobs'),
(93, 41, 'Eric', 'Deere'),
(94, 41, 'Amanda', 'Deere'),
(95, 41, 'Aiden', 'Deere'),
(96, 41, 'Maggie', 'Deere'),
(97, 41, 'Chance', 'Deere'),
(98, 26, 'Jason', 'Jette'),
(99, 26, 'Gina', 'Gorsek'),
(100, 47, 'donald', 'evans'),
(101, 47, 'evonne ', 'evans'),
(102, 35, 'Alexa', 'Broyles'),
(103, 35, 'Allison', 'Eickemeyer'),
(104, 49, 'Justin', 'Warren');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  `RSVP` int(8) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email_msgs` tinyint(1) NOT NULL DEFAULT '0',
  `list_stamp` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `fullname`, `email`, `RSVP`, `approved`, `admin`, `email_msgs`, `list_stamp`) VALUES
(1, 'nathan', '95192c98732387165bf8e396c0f2dad2', 'Nathan', 'nathan546@gmail.com', 1, 1, 1, 0, NULL),
(2, 'erica', '95192c98732387165bf8e396c0f2dad2', 'Erica', 'pineapple.mmm@gmail.com', 1, 1, 1, 0, NULL),
(3, 'san_art_barr', 'a04966577963a5b834fb5583ed9d7c51', 'Sandy & Arthur Barrett', 'null@null.com', 3, 1, 0, 0, NULL),
(4, 'sherry_deere', 'b92a8c7a74f621eef70c1999cd2c8ad7', 'Sherry Deere', 'null@null.com', 1, 1, 0, 0, NULL),
(5, 'joyce_barrett', '4f23a6f8c62874f66acf8cbba5e285e9', 'Joyce Barrett', 'null@null.com', 2, 1, 0, 0, NULL),
(6, 'jenny_jacobs', '749d9fa630212a98b5fc3ebbe81af878', 'Jenny Jacobs', 'null@null.com', 2, 1, 0, 0, NULL),
(7, 'joh_nan_denn', '6c951561010cebdc2a7ee3d5f6a6f831', 'John & Nancy Denner', 'null@null.com', 3, 1, 0, 0, NULL),
(8, 'shelleym', 'f3916344f310bbdf6c34135979b85da6', 'Shelley Morrison', 'null@null.com', 4, 1, 0, 0, NULL),
(9, 'steve_gruetter', 'fd574d3b933feb695d607721ba0f243e', 'Steve Gruetter', 'null@null.com', 4, 1, 0, 0, NULL),
(10, 'judy_morrison', 'd3cb7d9aa243b5eb667cbcb383b4ffae', 'Grandma Judy', 'null@null.com', 1, 1, 0, 0, NULL),
(11, 'mh_morrison', '86fa9ac5f357572408fcd2a029100049', 'Mike & Helen Morrison', 'null@null.com', 4, 1, 0, 0, NULL),
(12, 'pd_morrison', 'be608eff3f1eed18c22e6eb70753de38', 'Pat & Darlene Morrison', 'null@null.com', 3, 1, 0, 0, NULL),
(13, 'doug_morrison', '671f0faaeaae855d1f23bb6d5f1c1228', 'Doug Morrison', 'null@null.com', 2, 1, 0, 0, NULL),
(14, 'cn_morrison', 'b97d7a8e75816ad15d5bb75f9f73e227', 'Chris & Norma Morrison', 'null@null.com', 5, 1, 0, 0, NULL),
(15, 'tm_queen', '9db2386d7468f8518b6705d280ae4ba2', 'Tom & Missy Queen', 'null@null.com', 3, 1, 0, 0, NULL),
(16, 'betty_jette', 'e0a057fa6d2f5a9b2ded8047d3150b15', 'Betty Jette', 'null@null.com', 1, 1, 0, 0, NULL),
(17, 'shtar_jette', '4387c60dbb71f458556e4deac07fcb34', 'Shane & Tara Jette', 'null@null.com', 6, 1, 0, 0, NULL),
(18, 'tr_hurley', '7292f84da373736e8559454ac45bf7e7', 'Tina & Robert Hurley', 'null@null.com', 4, 1, 0, 0, NULL),
(19, 'st_jette', '4387c60dbb71f458556e4deac07fcb34', 'Steve Jette', 'null@null.com', 3, 1, 0, 0, NULL),
(20, 'jh_jones', 'c70d49243f318e50b7172c9e65ae50a7', 'Jen & Herb Jones', 'null@null.com', 2, 1, 0, 0, NULL),
(21, 'cm_jones', '712df4000376d1bede86dc9112a98412', 'Chad & Meredith Jones', 'null@null.com', 3, 1, 0, 0, NULL),
(22, 'cj_jones', 'ab6b43a95f901527c9e338e99fbead7c', 'Casey & Jennifer Jones', 'null@null.com', 3, 1, 0, 0, NULL),
(23, 'tk_jette', '2f6ae34cf72e6cff555d94a27a3d38aa', 'Tom & Kathy Jette', 'null@null.com', 2, 1, 0, 0, NULL),
(24, 'jl_jette', '9d039d02e9702287af2755fbeb546937', 'Jimi & Leigh Jette', 'null@null.com', 3, 1, 0, 0, NULL),
(25, 'hl_keplinger', '55eb442f09fb7a53b9fd6b58614ce011', 'Heather & Luke Keplinger', 'null@null.com', 4, 1, 0, 0, NULL),
(26, 'jason_jette', 'e1357e6f5dd49ab0773e9e752616b19e', 'Jason Jette', 'null@null.com', 2, 1, 0, 0, NULL),
(27, 'kj_higginbotham', '563ed693771fc4fb569dea770f1452b6', 'Kelley & Jack Higginbotham', 'null@null.com', 2, 1, 0, 0, NULL),
(28, 'taryn_altmaier', '138f0350e12700d7827a52ce733566bb', 'Taryn Altmaier', 'null@null.com', 3, 1, 0, 0, NULL),
(29, 'marilyn', 'accca2f4db1eee6df8ae1acf73763674', 'Marilyn', 'null@null.com', 1, 1, 0, 0, NULL),
(30, 'cgartin', 'a23826f3572cd0e813a643d39a943536', 'Christy Gartin', 'null@null.com', 2, 1, 0, 0, NULL),
(31, 'jroller', '15d09e2335068031c6f0488b0ac6eaa8', 'Janice Roller', 'null@null.com', 2, 1, 0, 0, NULL),
(32, 'amorgan', '693c31eb00469b1ca2a272f7314a1740', 'Angel Morgan', 'null@null.com', 2, 1, 0, 0, NULL),
(33, 'bskeens', '5404348155dfdc5dd87fe0d9ca23d5f1', 'Barb Skeens', 'null@null.com', 2, 1, 0, 0, NULL),
(34, 'cmiller', 'cc4799f86d71fb9505f5ec4df3d994f0', 'Chris Miller', 'null@null.com', 2, 1, 0, 0, NULL),
(35, 'abroyles', 'e851716079b7305b6bde7a56ae7524e4', 'Alexa Broyles', 'null@null.com', 2, 1, 0, 0, NULL),
(36, 'aj_mcgee', '853207e2a277752e3e8d42164c06fea4', 'Amanda & Jason McGee', 'null@null.com', 3, 1, 0, 0, NULL),
(37, 'as_molchanow', '5ae4cf486674b131206d4c9f5fa0e91c', 'Amanda & Steven Molchanow', 'null@null.com', 2, 1, 0, 0, NULL),
(38, 'ra_denner', '0da17a47504d5fa55cd913c33993ab6e', 'Ryan & Allison Denner', 'null@null.com', 2, 1, 0, 0, NULL),
(39, 'db_sparks', '674b9f252572c2a749f066d1580c5a85', 'David & Becky Sparks', 'null@null.com', 7, 1, 0, 0, NULL),
(40, 'jb_deere', 'fa76b5fe3ff6a90390e57d666e78c788', 'Jason & Beth Deere', 'null@null.com', 5, 1, 0, 0, NULL),
(41, 'ea_deere', 'ac6b1e4cc74c398bd9927849fb5b7a14', 'Eric & Amanda Deere', 'null@null.com', 5, 1, 0, 0, NULL),
(42, 'jb_mercer', '3ec5255c356a5c5462c7b21f363fa05e', 'Brenda & Junior Mercer', 'null@null.com', 2, 1, 0, 0, NULL),
(43, 'tj_mercer', 'd1530e4f5766fc0e9c9f27c9ea80b357', 'Todd & Jeanne Mercer', 'null@null.com', 3, 1, 0, 0, NULL),
(44, 'rr_mercer', 'c1a4454cbb05464f3caefe4a20661d4e', 'Riley Mercer & Ryan', 'null@null.com', 2, 1, 0, 0, NULL),
(45, 'ta_mercer', '8371c1b91aaed5bbd2f5fcca1e9f13ce', 'Tim & Amber Mercer', 'null@null.com', 4, 1, 0, 0, NULL),
(46, 'ks_sayre', '5e0b620036399c390f6fae105f59cf04', 'Kenny & Sonya Sayre', 'null@null.com', 2, 1, 0, 0, NULL),
(47, 'de_evans', 'a5b39825f938beaa42da6fef385de74d', 'Don & Evon Evans', 'null@null.com', 2, 1, 0, 0, NULL),
(48, 'charles_sheridon', '7c33fe3cfbab5d0563fde7ad33f6ded8', 'Charles Hurt & Sheridon', 'null@null.com', 2, 1, 0, 0, NULL),
(49, 'justin_warren', 'ff2e4feeff58ccec0d836d89c6c02f2d', 'Justin Warren', 'null@null.com', 2, 1, 0, 0, NULL),
(50, 'wedding', '09f7de29d49ae6c13fcc4c42cac2fc0c', 'Tom and Kathy Jette', 'tjette@ohiohills.com', 0, 0, 0, 0, NULL),
(51, 'SteveGruetter', '6ec059f3914d48a7ee3cb6193fc8eb95', 'Steve Gruetter', 'segruetter@gmail.com', 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wedding_info`
--

CREATE TABLE IF NOT EXISTS `wedding_info` (
  `party_name` text NOT NULL,
  `party_date` text NOT NULL,
  `party_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wedding_info`
--

INSERT INTO `wedding_info` (`party_name`, `party_date`, `party_location`) VALUES
('Erica and Nathan''s Wedding - 2016', 'August 27, 2016', 'Westgate Shelterhouse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`itemid`), ADD UNIQUE KEY `itemid` (`itemid`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
 ADD PRIMARY KEY (`ranking`);

--
-- Indexes for table `rsvp_info`
--
ALTER TABLE `rsvp_info`
 ADD PRIMARY KEY (`rsvpid`), ADD UNIQUE KEY `rsvpid` (`rsvpid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
MODIFY `ranking` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rsvp_info`
--
ALTER TABLE `rsvp_info`
MODIFY `rsvpid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
