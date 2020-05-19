-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 08:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(200) COLLATE utf8_bin NOT NULL,
  `article_body` text COLLATE utf8_bin NOT NULL,
  `article_image` varchar(200) COLLATE utf8_bin NOT NULL,
  `publish_on` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_body`, `article_image`, `publish_on`, `user_id`) VALUES
(1, 'How to Scan REST APIs and Web Services with Netsparker', 'When most people think of web security, they think about testing websites and web applications. But over 80% of web traffic is actually sent through web APIs, or Application Programming Interfaces – and these need to be tested as well. Read on to learn how to scan web APIs and to see Netsparker in action with our new REST API test site.\r\nWhat are Web APIs?\r\nApplication Programming Interfaces (APIs) can enable systems to talk to each other or control communication between systems. The interfaces allow easy and isolated access to an application’s functions and can greatly simplify management. By exposing APIs, developers can share specific application functionality.\r\n\r\nIn a web context, APIs are called web services. The use of web services has dramatically changed web application architecture. Traditionally, each web application executed all the tasks it needed, such as logic processing, data storage, and presentation. With the widespread use of web services, web applications mostly take care of presentation, while data processing and business logic are handled via APIs calls.\r\n\r\nAPI requests constitute majority of modern web traffic. According to the Akamai “State of the Internet (2018)” report, communication over APIs accounts for 83% of all web traffic, with most of the usage coming from web services and mobile applications. In spite of this, web API security is mostly overlooked. This neglect results from the continued belief in security through obscurity – after all, web services perform their jobs in the background, so they shouldn’t attract the attention of attackers, right? Unfortunately, research from Gartner suggests otherwise. \r\n\r\nAccording to Gartner’s analysts, APIs are set to become a major attack vector for malicious hackers. Gartner’s report “How to Build an Effective API Security Strategy” predicts that APIs will become the number one attack vector in 2022, while “API Strategy Maturity Model, October 2019”, again from Gartner, expects APIs to have a wide attack surface by 2021. These predictions have prompted many people to pay more attention to securing their web services, APIs, and applications. \r\n\r\nTo help you secure these assets, this article will walk you step by step though scanning your web services with Netsparker and choosing the best configuration for complete and accurate results.', 'upload/rest-api-test.png', '2020-04-24 19:29:20', 1),
(2, 'Bombay, Orissa and Meghalaya high courts get new chief justices', 'The Central government on Thursday cleared the appointment of new chief justices to three high courts - Bombay, Orissa and Meghalaya.\r\n\r\nCalcutta high court judge, Justice Dipankar Datta was appointed chief justice of Bombay high court.\r\n\r\nJustice Biswanath Somadder will be the new Meghalaya high court chief justice while Justice Mohammad Rafiq will take over as Orissa high court chief justice.\r\n\r\nThe Supreme Court collegium had recommended these three appointments on April 18.\r\nJustice Datta will take over from the current chief justice of Bombay, Justice BP Dharmadhikari who will retire from office on April 27.\r\n\r\nJustice Datta, who was born in 1965, obtained a law degree in 1989 and practiced in the Supreme Court and high courts before he was appointed judge of Calcutta high court in 2006.\r\n\r\nJustice Somadder who originally hails from Calcutta high court is currently serving as a judge of Allahabad high court.', 'upload/hammer-gavel-for-justice.jpg', '2020-04-24 19:38:27', 1),
(3, '10 Minutes of Yoga to Jumpstart Your Work Day', 'Need a little more energy in your day? This 10-minute yoga sequence can balance your body and focus your mind.\r\n\r\nAnd no special workout gear or studio space is necessary. These beginner-friendly yoga poses can be done on a mat or in the comfort of your living room.\r\n\r\nLet this yoga routine awaken your flexibility, balance and strength so you can face every day with a zen mindset.', 'upload/yoga.jpg', '2020-04-24 19:46:14', 1),
(4, 'Google is moving ahead with its plans for Android', 'Google is moving ahead with its plans for Android 11, with the operating system now getting a new version of its developer preview. After releasing the first preview for the OS back in February, the company has now released the third developer preview for Pixel smartphones. The last one of its type, the company will now move to the public beta starting next month.\r\n\r\nWhile this final developer preview does not bring too many new features, and mainly focuses on tweaking existing features announced in the first and the second versions of the developer preview.', 'upload/download.png', '2020-05-07 20:04:37', 1),
(5, 'Zoom now has 300 million users despite security flaws', 'The video conferencing app Zoom has witnessed a huge surge in daily users in April. The users have gone up from 200 million in March to 300 million in the last couple of weeks. Zoom has had the most successful run in the time of coronavirus with its users going up from 10 million in December to 200 million in March. However, it was mired in controversies recently due to some security flaws that were unearthed by experts.\r\n\r\nZoom has however said that the numbers are counted on the basis of daily meetings. For instance, if you conduct or be a part of five meetings a day, you will be counted five times. The company also confirmed in a blog post that it has 300 million daily users.\r\n\r\nThe number of users have surprisingly gone up despite the security and privacy flaws uncovered by the experts. In order to sort the privacy issues, Zoom had announced a 90-day feature freeze and is also rolling out the Zoom 5.0 update this week. The new update promises password protection and improved encryption with support for AES 256-bit GCM encryption.\r\n\r\nTalking about the new updates, Oded Gal, CPO of Zoom, said in a blog post, \"We take a holistic view of our users’ privacy and our platform’s security. From our network to our feature set to our user experience, everything is being put through rigorous scrutiny. On the back end, AES 256-bit GCM encryption will raise the bar for securing our users’ data in transit. On the front end, I’m most excited about the Security icon in the meeting menu bar. This takes our security features, existing and new, and puts them front and center for our meeting hosts. With millions of new users, this will make sure they have instant access to important security controls in their meetings.\"\r\n\r\nADVERTISEMENT\r\n\r\nZoom faced a backlash for its privacy and security policies, some of the tech giants including Google and Tesla had banned their employees from using the video conferencing app from their official workstation. The Taiwan government too advised its officials against it. The latest government to raise concerns about its security and privacy policies was the Indian government. They called the app “unsafe”. The Indian government also announced an innovative challenge for companies and tech developers to come up with an alternative for Zoom, whoever wins will take home a whopping amount of Rs 1 Crore.\r\n\r\nALSO READ | Oppo A52 with Snapdragon 665 SoC, 5000mAh battery launched in China\r\nALSO READ | Motorola Edge series flagships launching today: Here’s what to expect from these premium phones\r\nALSO READ | Oppo A12 with MediaTek Helio P35 SoC, 4230mAh battery launched', 'upload/zoom.png', '2020-04-24 19:51:39', 1),
(6, 'IT sector revenue growth may hit decadal low due to Covid-19: CRISIL', 'The Indian IT sector is staring at a revenue growth sliding to a decadal low of up to 2 per cent and an impact on profitability owing to narrowing of margins due to the Covid-19 pandemic, a report said on Friday.\r\n\r\nThe companies will lose out on new deals, which will compromise future revenues, and also face reverses on the exiting ones, which may be renegotiated as their overseas clients face difficulties due to the lockdowns, domestic rating agency Crisil said in the report.\r\n\r\nThe $97 billion IT sector is one of the largest service exporters and helps the economy also by supporting over 40 lakh jobs if the IT-enabled services are also included.\r\n\r\nMajor companies including Infosys and Wipro have earlier this month discontinued the practice of giving yearly guidances, while TCS hinted at pain during the first two quarters of the year.\r\n\r\n“Typically, new deals get finalised between March and May, but this time around, most clients will focus on mitigating emerging business risks and defer discretionary IT spend, while letting existing contracts continue,” Crisil’s senior director Anuj Sethi said.\r\n\r\nCrisil said that revenue growth for the industry will decline to a decadal low of 0-2 per cent.\r\n\r\nThe ongoing restrictions on mobility, which has resulted in the entire aviation sector being closed, will also cause delays in deal consummations, Sethi added.\r\n\r\nThe IT industry’s largest client segment of banking, financial services and insurance which accounts for 28 per cent of the industry revenues will deliver an 8 per cent topline growth on rising share of digital transactions and presence of larger and longer-term maintenance contracts that are critical to operations, Crisil said.\r\n\r\nWhile healthcare segment, which accounts for 8 per cent of the IT industry revenues, will also grow at similar levels, it said.\r\n\r\nHowever, other segments including retail (32 per cent of IT service revenues), and communication, aerospace, defence and transportation (22 of revenues) and manufacturing, travel and tourism and oil and energy will see a steep and immediate impact on revenues considering sluggish demand in these sectors, it said.\r\n\r\nThe rating agency said operating profitability could moderate by 2-2.50 percentage points to a decadal low of 20 per cent for 2020-21, despite gains from rupee depreciation.\r\n\r\nThe slowdown in revenues will have an impact on profitability because the IT firms will have to continue investing in new age technologies to showcase their ability to execute complex digital projects, its associate director Rajeshwari Karthigeyan said.\r\n\r\nKarthigeyan explained that in the last four years, the share of digital revenues has grown to about 40 per cent of the total revenues, but at the same time has seen a narrowing of profit margins by up to 1.50 per cent.\r\n\r\nIT companies have already streamlined costs and raised utilisation rates to record high of 85-90 per cent by increasing the share of fixed price contracts, which will make it impossible to derive any gains from optimising employee or outsourcing costs, the agency said.\r\n\r\nThe ratings agency, which studied 15 companies constituting 70 per cent of the total revenues, said there will not be any impact on ratings as a result of this and limited itself to say that ones with revenue concentration in weak segments may face some challenges.\r\n\r\nIt flagged the extent of the pandemic and its impact on the global economy as a key monitorable factor going ahead.', 'upload/WORKINGSPACE.jpg', '2020-04-24 20:29:58', 3),
(7, 'MSI GF63 8RD: A gaming laptop that fits your bill', 'Buying a gaming laptop is a tricky affair. You can go wrong in more than one way if you are not careful enough because in most cases what you see is not exactly what you get. Ideally, a buyer looking for a gaming laptop tends to look for a few key features in the device. These are: high resolution, extra computing power (which means the best processor and rich RAM capabilities); sturdy body since you will handle them roughly; no touch-screens because they are battery-guzzlers and costly; strong and comfortable keyboard; best-in-class graphics chip; and, as the topping of the cake, a solid slate drive (SSD) of decent size so your games load and shoot fast. Buying a good brand is arguably the best option for many because often buying a not-so-known brand or model can backfire on you. Which is why most gamers tend to stick to big-ticket device makers. There are not many of them and most such laptops come with a hefty price tag. This is where laptops from MSI try to make a difference. The most attractive element about them is the affordable pricing. Next comes the line-up of impressive specs and the performance.\r\n\r\nLight and game\r\nPriced nearly ₹70,000 and upwards, the MSI GF63 8RD (they must really unlearn a lot about naming their products) comes with a bouquet of impressive features and faculties. That said, the laptop looks suitably ordinary. Some users may be drawn to the retro charm, but we felt it could have had some modern tenor. The lid and deck are made of plastic; the body is slippery and can fall from your grip easily if you are not careful enough. You’re advised to use a back-cover. At 1.86 kg, this is not a very heavy laptop; considering that gaming laptops tend to be on the heavier side, one can easily call this a light gaming laptop.\r\n\r\nThe MSI GF63 8RD has a 15.6-inch full high-definition (1920x1080) screen backed by an IPS-Level display. Technically speaking, an FHD display is good enough for the kind of games an average user would run on a laptop of this mettle. Still, the display could have been better as one gets a feeling that the screen doesn’t do justice to the images and video it renders, especially while playing games that feature fast movements and brightness that can make the screen bleed. We tried nearly a dozen games and played many movies on this and our experience suggests the display is a work in progress. The display bezels are of 4.9 mm thin.', 'upload/MSI-Gaming-laptop.jpg', '2020-04-24 20:33:20', 3),
(8, 'Facebook’s Summer 2020 Internship Program will be held virtually owing to Covid-19', 'Facebook on Tuesday announced that it would be moving its Summer 2020 Internship Program online owing to the coronavirus pandemic.\r\n\r\n“Given the continuing health and safety issues posed by COVID-19, we have decided to move our 2020 global internship program to a remote-only model this summer,” the tech giant said in a blog post.\r\n\r\nFacebook’s summer internship program is one of the most prestigious internships in the tech industry, which often provide an entryway for interns to land a job with the company. The program will be entirely remote this summer owing to global shutdowns and social distancing guidelines to flatten the curve of Covid-19.\r\n\r\nAnother tech giant Google, which offers a similar program, had also recently announced that it wouldbe transforming its program to a virtual internship program.\r\n\r\nThe pandemic has led to Facebook changing guidelines for its workforce, moving a lot of its work to a remote model. The company recently announced that it would be extending its policy to discontinue all non-essential business travel for employees until this June at the least.\r\n\r\nIt also said that it would require the vast majority of the company’s employees to work from home through at least May-end for safety concerns.\r\n\r\nA small per cent of Facebook employees may be allowed to return sooner, Facebook CEO Mark Zuckerberg had said in a Facebook post. These employees will be working on essential tasks and include content reviewers working on counter-terrorism or suicide and self-harm prevention, and engineers working on complex hardware.\r\n\r\nThe social media giant has also cancelled all of its major events with more than 50 people until June 2021.\r\n\r\n“We’re slowing our plans to return to the office in order to prioritise helping the rest of our community and local economy to get back up and running first,” Zuckerberg wrote in a Facebook post.\r\n\r\n“Guidance from health experts is that it won’t be advisable to have large groups of people get together for a while. Given this, we’re cancelling any large physical events we had planned with 50 or more people through June 2021,” he further added.', 'upload/fb-hqjpg.jpg', '2020-04-24 20:35:05', 3),
(9, 'demo', 'demo', 'upload/MAIN_0-940x570.jpg', '2020-04-25 15:45:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Firozobad', 2),
(2, 'Shahjahanabad', 2),
(3, 'Ahmedabad', 3),
(4, 'Vadodara', 3),
(5, 'bhubaneswar', 1),
(6, 'puri', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'America'),
(3, 'Brazil'),
(4, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'Odisha', 1),
(2, 'Delhi', 1),
(3, 'Gujurat', 1),
(4, 'Chhattisgarh', 1),
(5, 'california', 2),
(6, 'New Mexico', 2),
(7, 'Virginia', 2),
(8, 'Sergipe', 3),
(9, 'Tocantins', 3),
(10, 'Saskatchewan', 4),
(11, 'Saskatchewan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email_id` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email_id`, `password`) VALUES
(1, 'Santanu Kumar Sahu', 'santanu06.1994@gmail.com', 'santanu06'),
(3, 'Tapas Kumar Mohanty', 'tapas@gmail.com', 'tap123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
