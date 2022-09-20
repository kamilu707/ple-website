-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 02:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ple_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id_author` int(11) NOT NULL,
  `name_author` varchar(50) NOT NULL,
  `email_author` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id_author`, `name_author`, `email_author`) VALUES
(1, 'admin_kam', 'kamal.ettalibi7@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title_blog` varchar(50) NOT NULL,
  `body_blog` text NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_author_fk` int(11) NOT NULL,
  `id_lecture_fk` int(11) NOT NULL,
  `thumbnail_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title_blog`, `body_blog`, `date_pub`, `id_author_fk`, `id_lecture_fk`, `thumbnail_link`) VALUES
(10, 'Simple present', '<p>The simple present is a&nbsp;<a href=\"https://www.grammarly.com/blog/verb-tenses/\">verb tense</a>&nbsp;with two main uses. We use the simple present tense when an action is happening right now, or when it happens regularly (or unceasingly, which is why it&rsquo;s sometimes called present indefinite). Depending on the person, the simple present tense is formed by using the root form or by adding ‑s or ‑es to the end.</p>\n\n<p>&nbsp;</p>\n\n<p>I feel great! Pauline loves pie. I&rsquo;m sorry to hear that you&rsquo;re sick.</p>\n\n<p><strong>Here&rsquo;s a tip:</strong>&nbsp;Want to make sure your writing always looks great? Grammarly can save you from misspellings, grammatical and punctuation mistakes, and other writing issues on all your favorite websites.</p>\n\n<p><img alt=\"Article icon\" src=\"https://contenthub-static.grammarly.com/assets/img/1f240f3ef40aec6f4f15a56318b79239/article.svg\" /></p>\n\n<p>Your writing, at its best</p>\n\n<p>Be the best writer in the office.</p>\n\n<p>GET GRAMMARLY</p>\n\n<p>The other is to talk about habitual actions or occurrences.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>Pauline practices the piano every day. Ms. Jackson travels during the summer. Hamsters run all night.</p>\n\n<p>&nbsp;</p>\n\n<p>Typically, when we want to describe a temporary action that is currently in progress, we use the&nbsp;<a href=\"https://www.grammarly.com/blog/present-continuous/\">present continuous</a>: Pauline can&rsquo;t come to the phone right now because she&nbsp;<strong>is brushing</strong>&nbsp;her teeth.</p>\n\n<h2>How to Form the Simple Present</h2>\n\n<p>In the simple present, most regular verbs use the root form, except in the third-person singular (which ends in&nbsp;<strong>-s</strong>).</p>\n\n<p><strong>First-person singular:</strong>&nbsp;<em>I write</em></p>\n\n<p><strong>Second-person singular:</strong>&nbsp;<em>You write</em></p>\n\n<p><strong>Third-person singular:</strong>&nbsp;<em>He/she/it writes</em>&nbsp;(note the ‑s)</p>\n\n<p><strong>First-person plural:</strong>&nbsp;<em>We write</em></p>\n\n<p><strong>Second-person plural:</strong>&nbsp;<em>You write</em></p>\n\n<p><strong>Third-person plural:</strong>&nbsp;<em>They write</em></p>\n\n<p>For a few verbs, the third-person singular ends with&nbsp;<strong>-es</strong>&nbsp;instead of&nbsp;<strong>-s</strong>. Typically, these are verbs whose root form ends in&nbsp;<strong>o, ch, sh, th, ss, gh,</strong>&nbsp;or&nbsp;<strong>z</strong>.</p>\n\n<p><strong>First-person singular:</strong>&nbsp;<em>I go</em></p>\n\n<p><strong>Second-person singular:</strong>&nbsp;<em>You go</em></p>\n\n<p><strong>Third-person singular:</strong>&nbsp;<em>He/she/it goes</em>&nbsp;(note the ‑es)</p>\n\n<p><strong>First-person plural:</strong>&nbsp;<em>We go</em></p>\n\n<p><strong>Second-person plural:</strong>&nbsp;<em>You go</em></p>\n\n<p><strong>Third-person plural:</strong>&nbsp;<em>They go</em></p>\n\n<p>For most regular verbs, you put the negation of the verb before the verb, e.g. &ldquo;She won&rsquo;t go&rdquo; or &ldquo;I don&rsquo;t smell anything.&rdquo;</p>\n\n<p>The verb&nbsp;<strong>to be</strong>&nbsp;is irregular:</p>\n\n<p><strong>First-person singular:</strong>&nbsp;<em>I am</em></p>\n\n<p><strong>Second-person singular:</strong>&nbsp;<em>You are</em></p>\n\n<p><strong>Third-person singular:</strong>&nbsp;<em>He/she/it is</em></p>\n\n<p><strong>First-person plural:</strong>&nbsp;<em>We are</em></p>\n\n<p><strong>Second-person plural:</strong>&nbsp;<em>You are</em></p>\n\n<p><strong>Third-person plural:</strong>&nbsp;<em>They are</em></p>\n\n<h2>How to Make the Simple Present&nbsp;Negative</h2>\n\n<p>The formula for making a simple present&nbsp;verb negative is&nbsp;<strong>do/does + not + [root form of verb]</strong>. You can also use the contraction&nbsp;<strong>don&rsquo;t</strong>&nbsp;or&nbsp;<strong>doesn&rsquo;t</strong>&nbsp;instead of&nbsp;<strong>do not</strong>&nbsp;or&nbsp;<strong>does not</strong>.</p>\n\n<p>&nbsp;</p>\n\n<p>Pauline does not want to share the pie. She doesn&rsquo;t think there is enough to go around. Her friends do not agree. I don&rsquo;t want pie anyway.</p>\n\n<p>&nbsp;</p>\n\n<p>To make the verb&nbsp;<strong>to be</strong>&nbsp;negative, the formula is&nbsp;<strong>[to be] + not</strong>.</p>\n\n<p>&nbsp;</p>\n\n<p>I am not a pie lover, but Pauline sure is. You aren&rsquo;t&nbsp;ready for such delicious pie.</p>\n\n<p>&nbsp;</p>\n\n<h2>How to Ask a Question</h2>\n\n<p>The formula for asking a question in the simple present is&nbsp;<strong>do/does + [subject] + [root form of verb]</strong>.</p>\n\n<p>&nbsp;</p>\n\n<p>Do you know how to bake a pie? How much does Pauline love pie?</p>\n\n<p>&nbsp;</p>\n\n<h2>Common Verbs in the Simple Present</h2>\n\n<table>\n	<tbody>\n		<tr>\n			<td><strong>Infinitive</strong></td>\n			<td><strong>I, You, We, They</strong></td>\n			<td><strong>He, She, It</strong></td>\n		</tr>\n		<tr>\n			<td>to ask</td>\n			<td>ask / do not ask</td>\n			<td>asks / does not ask</td>\n		</tr>\n		<tr>\n			<td>to work</td>\n			<td>work / do not work</td>\n			<td>works / does not work</td>\n		</tr>\n		<tr>\n			<td>to call</td>\n			<td>call / do not call</td>\n			<td>calls / does not call</td>\n		</tr>\n		<tr>\n			<td>to use</td>\n			<td>use / do not use</td>\n			<td>uses / does not use</td>\n		</tr>\n		<tr>\n			<td>to have</td>\n			<td>have / do not have</td>\n			<td>has / does not have</td>\n		</tr>\n	</tbody>\n</table>\n\n<h2>The Verb&nbsp;<em>to Be</em>&nbsp;in the Simple Present</h2>\n\n<table>\n	<tbody>\n		<tr>\n			<td><strong>Infinitive</strong></td>\n			<td><strong>I</strong></td>\n			<td><strong>You, We, They</strong></td>\n			<td><strong>He, She, It</strong></td>\n		</tr>\n		<tr>\n			<td>to be</td>\n			<td>am / am not</td>\n			<td>are / are not</td>\n			<td>is / is not</td>\n		</tr>\n	</tbody>\n</table>\n', '2022-04-05 02:35:14', 1, 1, 'IMG-632333db6ca443.66592963.jpg'),
(11, 'Simple Past Tense', '<p>The simple past tense is a verb tense that is used to talk about actions that happened or appeared before now meaning in the past. Imagine somebody asks what your friend Alex did while he was in the city last month. you may answer as an example that:</p>\r\n\r\n<p>- James&nbsp;<strong>bought </strong>a motorcycle.</p>\r\n\r\n<p>- James&nbsp;<strong>searched </strong>for his favorite shirt in the city market.</p>\r\n\r\n<h2>When to use simple past&nbsp;</h2>\r\n\r\n<p>The simple past tense indicates that you are discussing an event that has already occurred in the past. Unlike the past continuous tense, which is intended to describe events that occurred in the past for a period of time, the simple past tense affirms the action is finished.</p>\r\n\r\n<p>Example: Kevin&nbsp;<strong>went </strong>to the park.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You can also use the simple past to talk about a past state of being, such as the way someone felt about something. This is often expressed with the simple past tense of the verb&nbsp;<strong>to be</strong>&nbsp;and an adjective, noun, or prepositional phrase.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Example: Kevin&nbsp;<strong>was</strong>&nbsp;happy about his visit to the city.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>How to Formulate the Simple Past</h2>\r\n\r\n<p>For regular verbs, add&nbsp;<strong>-ed</strong>&nbsp;to the root form of the verb (or just&nbsp;<strong>-d</strong>&nbsp;if the root form already ends in an e):</p>\r\n\r\n<p>Play&rarr;Played Type&rarr;Typed Listen&rarr;Listened Push&rarr;Pushed Love&rarr;Loved</p>\r\n\r\n<p>For irregular verbs, things get more complicated. The simple past tense of some irregular verbs looks exactly like the root form:</p>\r\n\r\n<p>Put&rarr;Put Cut&rarr;Cut Set&rarr;Set Cost&rarr;Cost Hit&rarr;Hit</p>\r\n\r\n<p>For other irregular verbs, including the verb&nbsp;<strong>to be</strong>, the simple past forms are more erratic:</p>\r\n\r\n<p>See&rarr;Saw Build&rarr;Built Go&rarr;Went Do&rarr;Did Rise&rarr;Rose Am/Is/Are&rarr;Was/Were</p>\r\n\r\n<p>The good news is that verbs in the simple past tense (except for the verb&nbsp;<strong>to be</strong>) don&rsquo;t need to agree in number with their subjects.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wolfgang&nbsp;<strong>polished</strong>&nbsp;his medal. The other winners&nbsp;<strong>polished</strong>&nbsp;their medals too.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>How to Make the Simple Past Negative</h2>\r\n\r\n<p>Fortunately, there is a formula for making simple past verbs negative, and it&rsquo;s the same for both regular and irregular verbs (except for the verb&nbsp;<strong>to be</strong>). The formula is&nbsp;<strong>did not + [root form of verb]</strong>. You can also use the&nbsp;<a href=\"https://www.grammarly.com/blog/contractions/\">contraction</a>&nbsp;<strong>didn&rsquo;t</strong>&nbsp;instead of&nbsp;<strong>did not</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wolfgang&nbsp;<strong>did not brag</strong>&nbsp;too much about his hula hoop skills. Wolfgang&rsquo;s girlfriend&nbsp;<strong>didn&rsquo;t see</strong>&nbsp;the contest.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For the verb&nbsp;<strong>to be</strong>, you don&rsquo;t need the auxiliary&nbsp;<em>did</em>. When the subject of the sentence is singular, use&nbsp;<strong>was not</strong>&nbsp;or&nbsp;<strong>wasn&rsquo;t</strong>. When the subject is plural, use&nbsp;<strong>were not</strong>&nbsp;or&nbsp;<strong>weren&rsquo;t</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The third-place winner&nbsp;<strong>was not</strong>&nbsp;as happy as Wolfgang. The fourth-place winner&nbsp;<strong>wasn&rsquo;t</strong>&nbsp;happy at all. The onlookers&nbsp;<strong>were not</strong>&nbsp;ready to leave after the contest ended. The contestants&nbsp;<strong>weren&rsquo;t</strong>&nbsp;ready to leave either.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>How to Ask a Question</h2>\r\n\r\n<p>The formula for asking a question in the simple past tense is&nbsp;<strong>did + [subject] + [root form of verb]</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Did Wolfgang win</strong>&nbsp;the gold medal or the silver medal? Where&nbsp;<strong>did Wolfgang go</strong>&nbsp;to celebrate?&nbsp;<strong>Did the judges decide</strong>&nbsp;fairly, in your opinion?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>When asking a question with the verb to be, you don&rsquo;t need the auxiliary&nbsp;<em>did</em>. The formula is&nbsp;<strong>was/were + [subject]</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Was</strong>&nbsp;Wolfgang in a good mood after the contest?&nbsp;<strong>Were</strong>&nbsp;people taking lots of pictures?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Common Regular Verbs in the Past Tense</h2>\r\n\r\n<p><img alt=\"Simple past regular verbs\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2016/03/Simple-past-chart-1.png\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<h2>Common Irregular Verbs in the Past Tense</h2>\r\n\r\n<p><img alt=\"Simple past chart 2\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2016/03/Simple-past-chart-2.png\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<h3>Simple past tense FAQs</h3>\r\n\r\n<p><strong>What is the simple past tense?</strong></p>\r\n\r\n<p>The simple past is a verb tense describing events that already happened.&nbsp;</p>\r\n\r\n<p><strong>What are some examples of simple past tense?</strong></p>\r\n\r\n<p><em>&ldquo;I ate cereal for breakfast this morning.&rdquo;&nbsp;</em></p>\r\n\r\n<p><em>&ldquo;Morganucodon was an early mammal that lived with dinosaurs.&rdquo;</em></p>\r\n\r\n<p><strong>Can simple past tense express future action?</strong></p>\r\n\r\n<p>The simple past tense can only express actions in the past. However, you can show current ongoing actions that started in the past with the present perfect continuous tense (e.g., &ldquo;I have been working there for twenty years&rdquo;).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Source: <a href=\"https://www.grammarly.com/blog/simple-past/\">Grammarly</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-24 00:49:57', 1, 1, 'IMG-632333f85a9ab4.12493498.jpg'),
(12, 'Simple Future Tense', '<p>The simple future is a verb tense that&rsquo;s used to talk about things that haven&rsquo;t happened yet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Example: This year, Jen&nbsp;<strong>will read</strong>&nbsp;<em>War and Peace</em>. It&nbsp;<strong>will be</strong>&nbsp;hard, but she&rsquo;s determined to do it.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Use the simple future to talk about an action or condition that will begin and end in the future.</p>\r\n\r\n<h2>How to Form the Simple Future</h2>\r\n\r\n<p>The formula for the simple future is&nbsp;<strong>will + [root form of verb]</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I&nbsp;<strong>will learn</strong>&nbsp;a new language. Jen&nbsp;<strong>will read</strong>&nbsp;that book. My brothers&nbsp;<strong>will sleep</strong>&nbsp;till noon if no one wakes them up. You&nbsp;<strong>will see</strong>&nbsp;what I mean.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It doesn&rsquo;t matter if the subject is singular or plural; the formula for the simple future doesn&rsquo;t change.</p>\r\n\r\n<p>But&hellip;</p>\r\n\r\n<p>There is another way to show that something will happen in the future. It follows the formula&nbsp;<strong>[am/is/are] + going to + [root form verb]</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I&nbsp;<strong>am going to learn</strong>&nbsp;a new language. Jen&nbsp;<strong>is going to read</strong>&nbsp;that book. My brothers&nbsp;<strong>are going to sleep</strong>&nbsp;till noon if no one wakes them up. You&nbsp;<strong>are going to see</strong>&nbsp;what I mean.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The &ldquo;going to&rdquo; construction is common in speech and casual writing. Keep in mind though that it&rsquo;s on the informal side, so it&rsquo;s a good idea to stick to the&nbsp;<strong>will + [root form]</strong>&nbsp;construction in formal writing.</p>\r\n\r\n<h2>How to Make the Simple Future Negative</h2>\r\n\r\n<p>To make the simple future negative, the formula is&nbsp;<strong>will + not + [root form]</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jen&nbsp;<strong>will not quit</strong>&nbsp;before she reaches her goal. Make sure you arrive on time tomorrow because the bus&nbsp;<strong>will not wait</strong>&nbsp;for you. He&nbsp;<strong>will not say</strong>&nbsp;anything bad about his boss. I&nbsp;<strong>will not finish</strong>&nbsp;my homework in time for class.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Using the &ldquo;going to&rdquo; construction, the formula is&nbsp;<strong>[am/is/are] + not + going to + [root form]</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jen&nbsp;<strong>is not going to quit</strong>&nbsp;before she reaches her goal. Make sure you arrive on time tomorrow because the bus&nbsp;<strong>is not going to wait</strong>&nbsp;for you. He&nbsp;<strong>is not going to say</strong>&nbsp;anything bad about his boss. I&nbsp;<strong>am not going to finish</strong>&nbsp;my homework in time for class.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>How to Ask a Question</h2>\r\n\r\n<p>To ask a question in the simple future, the formula is&nbsp;<strong>will + [subject] + [root form]</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Will Jen finish</strong>&nbsp;<em>War and Peace</em>&nbsp;over the summer?&nbsp;<strong>Will I have</strong>&nbsp;the discipline to study Spanish every day? What&nbsp;<strong>will you buy</strong>&nbsp;with the money you found?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The formula for the &ldquo;going to&rdquo; construction is&nbsp;<strong>[am/is/are] + [subject] +going to + [root form]</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Is Jen going to finish</strong>&nbsp;<em>War and Peace</em>&nbsp;over the summer?&nbsp;<strong>Am I going to have</strong>&nbsp;the discipline to study Spanish every day? What&nbsp;<strong>are you going to buy</strong>&nbsp;with the money you found?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Common Verbs in the Simple&nbsp;Future</h2>\r\n\r\n<p><img alt=\"The simple future common verbs\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2016/03/The-simple-future-common-verbs.png\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<h2>The &ldquo;Going to&rdquo; Construction</h2>\r\n\r\n<p><img alt=\"Simple future going to\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2016/03/Simple-future-going-to.png\" style=\"height:auto; width:100%\" /></p>\r\n', '2022-04-25 00:56:58', 1, 1, 'IMG-632334596fed09.48212150.jpg'),
(13, 'Present Perfect Tense', '<p>The present perfect tense refers to an action or state that either occurred at an indefinite time in the past (e.g., we have talked before) or began in the past and continued to the present time (e.g., he has grown impatient over the last hour). This tense is formed by&nbsp;<strong>have/has + the past participle.</strong></p>\r\n\r\n<p>The construction of this&nbsp;verb tense&nbsp;is straightforward. The first element is&nbsp;<em>have</em>&nbsp;or&nbsp;<em>has</em>, depending on the subject the verb is conjugated with. The second element is the past&nbsp;participle&nbsp;of the verb, which is usually formed by adding -ed or -d to the verb&rsquo;s root (e.g., walked, cleaned, typed, perambulated, jumped, laughed, saut&eacute;ed) although English does have quite a few verbs that have irregular past participles (e.g., done, said, gone, known, won, thought, felt, eaten).</p>\r\n\r\n<p>These examples show how the present perfect can describe something that occurred or was the state of things at an unspecified time in the past.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#27ae60\">Correct:&nbsp;</span>I&nbsp;have walked&nbsp;on this path before.</p>\r\n\r\n<p><span style=\"color:#27ae60\">Correct:&nbsp;</span>We&nbsp;have eaten&nbsp;the lasagna here.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Keep in mind that you can&rsquo;t use the&nbsp;present perfect when you are being specific about when the action happens.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#27ae60\">Correct:</span> I&nbsp;have put away&nbsp;all the laundry.</p>\r\n\r\n<p><span style=\"color:#c0392b\">Incorrect:</span> I&nbsp;have put away&nbsp;all the laundry at 10:00 this morning.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You can use the present perfect to talk about the duration of something that started in the past is still happening.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>She&nbsp;has had&nbsp;the chickenpox since Tuesday.</p>\r\n', '2022-04-25 00:59:10', 1, 1, ''),
(14, 'Past Perfect Tense', '<p>The&nbsp;<strong>past perfect</strong>, also&nbsp;called the pluperfect, is a verb tense used to talk about actions that were completed before some point in the past.</p>\r\n\r\n<p>Example:&nbsp; &nbsp;We were shocked to discover that someone&nbsp;<strong>had graffitied</strong>&nbsp;&ldquo;Tootles was here&rdquo; on our front door. We were&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; relieved that Tootles&nbsp;<strong>had used</strong>&nbsp;washable paint.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The past perfect tense is for talking about something that happened before something else. Imagine waking up one morning and stepping outside to grab the newspaper. On your way back in, you notice a mysterious message scrawled across your front door: Tootles was here. When you&rsquo;re telling this story to your friends later, how would you describe this moment? You might say something like:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Example: I turned back to the house and saw that some someone named Tootles&nbsp;<strong>had defaced</strong>&nbsp;my front door!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In addition to feeling indignant on your behalf, your friends will also be able to understand that Tootles graffitied the door at some point in the past&nbsp;<em>before</em>&nbsp;the moment this morning when you saw his handiwork, because you used the&nbsp;<strong>past perfect</strong>&nbsp;tense to describe the misdeed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>The Past Perfect Formula</h2>\r\n\r\n<p>The formula for the past perfect tense is&nbsp;<strong>had + [past participle]</strong>. It doesn&rsquo;t matter if the subject is singular or plural; the formula doesn&rsquo;t change.</p>\r\n\r\n<h2>When to Use the Past Perfect</h2>\r\n\r\n<p>So what&rsquo;s the difference between past perfect and simple past? When you&rsquo;re talking about some point in the past and want to reference an event that happened even earlier, using the past perfect allows you to convey the sequence of the events. It&rsquo;s also clearer and more specific. Consider the difference between these two sentences:</p>\r\n\r\n<p>We were relieved that Tootles&nbsp;<strong>used</strong>&nbsp;washable paint. We were relieved that Tootles&nbsp;<strong>had used</strong>&nbsp;washable paint.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It&rsquo;s a subtle difference, but the first sentence doesn&rsquo;t tie Tootles&rsquo;s act of using washable paint to any particular moment in time; readers might interpret it as &ldquo;We were relieved that Tootles was in the habit of using washable paint.&rdquo; In the second sentence, the past perfect makes it clear that you&rsquo;re talking about a specific instance of using washable paint.</p>\r\n\r\n<p>Another time to use the past perfect is when you are expressing a condition and a result:</p>\r\n\r\n<p>If I&nbsp;<strong>had woken up</strong>&nbsp;earlier this morning, I would have caught Tootles red-handed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The past perfect is used in the part of the sentence that explains the condition (the if-clause).</p>\r\n\r\n<p>Most often, the reason to write a verb in the past perfect tense is to show that it happened before other actions in the same sentence that are described by verbs in the simple past tense. Writing an entire paragraph with every&nbsp;verb in the past perfect tense is unusual.</p>\r\n\r\n<h2>When Not to Use the Past Perfect</h2>\r\n\r\n<p>Don&rsquo;t use the past perfect when you&rsquo;re not trying to convey some sequence of events. If your friends asked what you did after you discovered the graffiti, they would be confused if you said:</p>\r\n\r\n<p>I&nbsp;<strong>had cleaned</strong>&nbsp;it off the door.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>They&rsquo;d likely be wondering what happened next because using the past perfect implies that your action of cleaning the door occurred&nbsp;<em>before</em>&nbsp;something else happened, but you don&rsquo;t say what that something else is. The &ldquo;something else&rdquo; doesn&rsquo;t always have to be explicitly mentioned, but context needs to make it clear. In this case there&rsquo;s no context, so the past perfect doesn&rsquo;t make sense.</p>\r\n\r\n<h2>How to Make the Past Perfect Negative</h2>\r\n\r\n<p>Making the past perfect negative is simple! Just insert&nbsp;<strong>not</strong>&nbsp;between&nbsp;<strong>had</strong>&nbsp;and&nbsp;<strong>[past participle]</strong>.</p>\r\n\r\n<p>We looked for witnesses, but the neighbors&nbsp;<strong>had not seen</strong>&nbsp;Tootles in the act. If Tootles&nbsp;<strong>had not included</strong>&nbsp;his own name in the message, we would have no idea who was behind it.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>How to Ask a Question</h2>\r\n\r\n<p>The formula for asking a question in the past perfect tense is&nbsp;<strong>had + [subject] + [past participle]</strong>.</p>\r\n\r\n<p><strong>Had</strong>&nbsp;Tootles&nbsp;<strong>caused</strong>&nbsp;trouble in other neighborhoods before he struck ours?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Common Regular Verbs in the Past Perfect Tense</h2>\r\n\r\n<p><img alt=\"past perfect chart 1\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2016/01/past-perfect-chart-1.png\" style=\"width:100%; height:auto;\" /></p>\r\n\r\n<h2>Common Irregular Verbs in the Past Perfect Tense</h2>\r\n\r\n<p><img alt=\"past perfect chart 2\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2016/01/past-perfect-chart-2.png\" style=\"width:100%; height:auto;\" /></p>\r\n\r\n<p>*The past participle of &ldquo;to get&rdquo; is &ldquo;gotten&rdquo; in American English. In British English, the past participle is &ldquo;got.&rdquo;&nbsp;</p>\r\n', '2022-04-25 01:01:08', 1, 1, 'IMG-63286f1b9eda10.34640492.jpg'),
(15, 'Future Perfect', '<p>The&nbsp;<strong>future perfect</strong>&nbsp;is a verb tense used for actions that will be completed before some other point in the future.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Example: The parade&nbsp;<strong>will have ended</strong>&nbsp;by the time Chester gets out of bed. At eight o&rsquo;clock I&nbsp;<strong>will have left</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Key words:&nbsp;<strong>Verb, past participle, tense, preposition</strong></p>\r\n\r\n<p>The future perfect tense is for talking about an action that will be completed between now and some point in the future. Imagine that your friend Linda asks you to take care of her cat for a few days while she goes on a trip. She wants you to come over today at noon so she can show you where to find the cat food and how to mash it up in the bowl just right so that Fluffy will deign to eat it. But you&rsquo;re busy this afternoon, so you ask Linda if you can come at eight o&rsquo;clock tonight instead.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"little-miss-future-perfect\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2015/10/little-miss-future-perfect.jpg\" style=\"height:auto; width:100%\" /></p>\r\n\r\n<p>&ldquo;No, that won&rsquo;t work! At eight o&rsquo;clock I&nbsp;<strong>will have left</strong>&nbsp;already,&rdquo; she says.</p>\r\n\r\n<p>What does the future perfect tell us here? It tells us that Linda is going to leave for her trip some time after right now, but before a certain point in the future (eight o&rsquo;clock tonight). She probably shouldn&rsquo;t have waited until the last minute to find a cat sitter.</p>\r\n\r\n<h2>The Future Perfect Formula</h2>\r\n\r\n<p>The formula for the future perfect tense is pretty simple:&nbsp;<strong>will have + [past participle]</strong>. It doesn&rsquo;t matter if the subject of your sentence is singular or plural. The formula doesn&rsquo;t change.</p>\r\n\r\n<h2>When to Use the Future Perfect Tense</h2>\r\n\r\n<p>Sometimes, you can use the future perfect tense and the simple future tense interchangeably. In these two sentences, there is no real difference in meaning because the word&nbsp;<em>before</em>&nbsp;makes the sequence of events clear:</p>\r\n\r\n<p>Linda will leave before you get there. Linda will have left before you get there.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>But without prepositions such as&nbsp;<em>before</em>&nbsp;or&nbsp;<em>by the time</em>&nbsp;that make the sequence of events clear, you need to use the future perfect to show what happened first.</p>\r\n\r\n<p>At eight o&rsquo;clock Linda will leave.&nbsp;<strong>(This means that Linda will wait until 8 o&rsquo;clock to leave.)</strong>&nbsp;At eight o&rsquo;clock Linda will have left.&nbsp;<strong>(This means Linda will leave before 8 o&rsquo;clock.)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>When Not to Use the Future Perfect Tense</h2>\r\n\r\n<p>The future perfect tense is only for actions that will be complete before a specified point in the future. In other words, the action you&rsquo;re talking about must have a deadline. If you don&rsquo;t mention a deadline, use the simple future tense instead of the future perfect tense.</p>\r\n\r\n<p><span style=\"color:#16a085\">Correct:</span> Linda will leave.</p>\r\n\r\n<p><span style=\"color:#c0392b\">Incorrect:</span> Linda will have left.</p>\r\n\r\n<p>The deadline can be very specific (eight o&rsquo;clock) or it can be vague (next week). It can even depend on when something else happens (after the parade ends). It just has to be some time in the future.</p>\r\n\r\n<h2>How to make the Future Perfect Negative</h2>\r\n\r\n<p>Making a negative future perfect construction is easy! Just insert&nbsp;<strong>not</strong>&nbsp;between&nbsp;<strong>will</strong>&nbsp;and&nbsp;<strong>have</strong>.</p>\r\n\r\n<p>Example: We&nbsp;<strong>will not have eaten</strong>&nbsp;breakfast before we get to the airport tomorrow morning. They&nbsp;<strong>will not have finished</strong>&nbsp;decorating the float before the parade.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You can also use the contraction&nbsp;<strong>won&rsquo;t</strong>&nbsp;in the place of&nbsp;<strong>will not</strong>. They&nbsp;<strong>won&rsquo;t have</strong>&nbsp;finished decorating the float before the parade.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>How to Ask a Question</h2>\r\n\r\n<p>The formula for asking a question in the future perfect tense is&nbsp;<strong>will + [subject] + have + [past participle]</strong>:</p>\r\n\r\n<p>Example:<strong> Will</strong>&nbsp;you&nbsp;<strong>have eaten</strong>&nbsp;lunch already when we arrive?&nbsp;<strong>Will</strong>&nbsp;they&nbsp;<strong>have finished</strong>&nbsp;decorating the float before the parade?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Prepositional Phrases that Often Go With the Future Perfect</h2>\r\n\r\n<p><strong>By this time</strong>&nbsp;next week, Linda will have left for her trip. Three days&nbsp;<strong>from now</strong>, we will have finished our project.&nbsp;<strong>At</strong>&nbsp;midnight, the party will have ended. Will you have eaten&nbsp;<strong>already</strong>? Chester will not have arrived&nbsp;<strong>by the time</strong>&nbsp;the parade is over.&nbsp;<strong>When</strong>&nbsp;I travel to France, I will have been to ten countries. My sister will have cleaned the bathroom&nbsp;<strong>before</strong>&nbsp;the party.&nbsp;<strong>As soon as</strong>&nbsp;someone buys this chair, I will have sold all the furniture I wanted to get rid of.</p>\r\n\r\n<h2>Common Regular Verbs in the Future Perfect Tense</h2>\r\n\r\n<p><a href=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2015/10/Future-perf-chart-11.png\"><img alt=\"Future perf chart 1\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2015/10/Future-perf-chart-11.png\" style=\"width:670px\" /></a></p>\r\n\r\n<h2>Common Irregular Verbs in the Future Perfect Tense</h2>\r\n\r\n<p><a href=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2015/10/Future-perf-chart-2.png\"><img alt=\"Future perf chart 2\" src=\"https://contenthub-static.grammarly.com/blog/wp-content/uploads/2015/10/Future-perf-chart-2.png\" style=\"height:auto; width:100%\" /></a>&nbsp;*Be careful when using the verb &ldquo;to be&rdquo; in the future perfect tense. The construction is easy to confuse with the future perfect continuous tense.</p>\r\n\r\n<p>**The past participle of &ldquo;to get&rdquo; is gotten in American English. In British English, the past participle is got.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Source:&nbsp;<a href=\"https://www.grammarly.com/blog/simple-past/\">Grammarly</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-25 01:07:51', 1, 1, 'IMG-6328716ce34944.27331043.jpg'),
(16, 'What is Phonology in Linguistics ? ', '<p>Definition: Phonology is the study of sound patterns in a language or dialect. Phonology uses the features of phonetic sounds.</p>\r\n\r\n<h2>Phoneme vs Allophone</h2>\r\n\r\n<p>A<strong> phoneme&nbsp;</strong>in phonology is a basic sound in language. In English, we have 37 to 41 sounds, depending on the dialect for example British, Australian or American. In other languages we can find more or fewer sounds for Example in Japanese there are only 22 sounds. Other languages have a lot of different sounds for example! X&oacute;&otilde; is a minority language in Namibia that has 161 sounds.<br />\r\n<strong>Allophone </strong>in phonology is one of multiple possible spoken sounds or phones that is is used to pronounce a single sound. for example, one sound can have multiple ways of pronunciation, which are called allophones.</p>\r\n\r\n<h2>Minimal Pairs</h2>\r\n\r\n<p>Words that differ in meaning and differ only in one sound. for example: <strong>/pɛt/</strong> and&nbsp;<strong>/bɛt/</strong> or alphabetically pet and bet. Now pet and bet differ in meaning, it means that they are minimal pairs.<br />\r\nNote: /p/ and /b/ are phonetically different.&nbsp;</p>\r\n', '2022-05-11 18:41:20', 1, 10, ''),
(17, 'New Test blog Name', 'Nice work kamal keep it up 2', '2022-08-14 16:45:27', 1, 10, ''),
(21, '', '', '2022-09-14 14:00:00', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `subj_comment` varchar(120) NOT NULL,
  `body_comment` text NOT NULL,
  `date_comment` date NOT NULL,
  `email_comment` varchar(120) NOT NULL,
  `id_blog_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `name_course` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `name_course`) VALUES
(1, 'Grammar'),
(2, 'Writing'),
(3, 'Vocabulary'),
(5, 'Linguistiics'),
(6, 'TESOL / TEFL');

-- --------------------------------------------------------

--
-- Table structure for table `exercice`
--

CREATE TABLE `exercice` (
  `id_exercice` int(11) NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `correct_resp` text NOT NULL,
  `question` text NOT NULL,
  `id_quize_fk` int(11) NOT NULL,
  `id_blog_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercice`
--

INSERT INTO `exercice` (`id_exercice`, `choice1`, `choice2`, `choice3`, `correct_resp`, `question`, `id_quize_fk`, `id_blog_fk`) VALUES
(12, 'works', 'working', 'work', 'work', 'I ....... at a bank.', 2, 10),
(13, 'feed', 'feeding', 'feeds', 'feed', 'Cows ....... on grass', 2, 10),
(14, 'earning', 'earn', 'earns', 'earn', 'He ........ a handsome salary.', 2, 10),
(18, 'goed', 'goes', 'went', 'went', 'I ........ to the mall after school.\r\n', 6, 11),
(19, 'goes', 'gowing', 'go', 'go', 'I usually ........ (go) to school.\r\n', 2, 10),
(20, 'visit', 'visiting', 'visits', 'visit', 'They ........ (visit) us often.', 2, 10),
(21, 'play', 'playing', 'plays', 'play', 'You ....... (play) basketball once a week.', 2, 10),
(22, 'working', 'work', 'works', 'works', 'Tom ....... (work) every day.', 2, 10),
(23, 'telling', 'tell', 'tells', 'tells', 'He always ........ (tell) us funny stories.', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id_lecture` int(11) NOT NULL,
  `name_lecture` varchar(120) NOT NULL,
  `id_course_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id_lecture`, `name_lecture`, `id_course_fk`) VALUES
(1, 'Tenses', 1),
(2, 'Modals', 1),
(3, 'Conditionals', 1),
(4, 'Articles', 1),
(5, 'Wh Questions', 1),
(6, 'Writing Paragraph', 2),
(8, 'Writing Essay', 2),
(10, 'Phonology', 5),
(11, 'Syntax', 5),
(12, 'TEFL: Introduction', 6);

-- --------------------------------------------------------

--
-- Table structure for table `quize`
--

CREATE TABLE `quize` (
  `id_quize` int(11) NOT NULL,
  `title_quize` varchar(120) NOT NULL,
  `content_quize` text NOT NULL,
  `id_blog_fk` int(11) NOT NULL,
  `id_author_fk` int(11) NOT NULL,
  `id_lecture_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quize`
--

INSERT INTO `quize` (`id_quize`, `title_quize`, `content_quize`, `id_blog_fk`, `id_author_fk`, `id_lecture_fk`) VALUES
(2, 'Quiz 1: Simple present tense\r\n', 'Make sentences in the simple present tense.\r\n\r\nIn the simple present tense, the verb takes the marker –s when the subject is a singular noun or pronoun. With plural subjects, the verb does not take the marker –s.\r\n\r\nCompare:\r\n\r\nMy sister sings very well. (Here the verb ‘sing’ takes the marker ‘-s’ because the subject is the singular noun ‘my sister’.)\r\n\r\nMy sisters sing very well. (Here the verb ‘sing’ does not take the marker –s because the subject is a plural noun – my sisters.)', 10, 1, 1),
(6, 'Quize 1 simple Past', '', 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'e83f0a5debbf7b6a56e2fbbb36206b38a1642e00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `author_fk` (`id_author_fk`),
  ADD KEY `lecture_fk` (`id_lecture_fk`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `blog_fk` (`id_blog_fk`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `exercice`
--
ALTER TABLE `exercice`
  ADD PRIMARY KEY (`id_exercice`),
  ADD KEY `quiz_fk` (`id_quize_fk`),
  ADD KEY `id_blog_fk` (`id_blog_fk`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id_lecture`),
  ADD KEY `id_course_fk` (`id_course_fk`);

--
-- Indexes for table `quize`
--
ALTER TABLE `quize`
  ADD PRIMARY KEY (`id_quize`),
  ADD KEY `id_blog_fk` (`id_blog_fk`),
  ADD KEY `id_autor_fk` (`id_author_fk`),
  ADD KEY `id_lecture_fk` (`id_lecture_fk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exercice`
--
ALTER TABLE `exercice`
  MODIFY `id_exercice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id_lecture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quize`
--
ALTER TABLE `quize`
  MODIFY `id_quize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `author_fk` FOREIGN KEY (`id_author_fk`) REFERENCES `author` (`id_author`),
  ADD CONSTRAINT `lecture_fk` FOREIGN KEY (`id_lecture_fk`) REFERENCES `lecture` (`id_lecture`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `blog_fk` FOREIGN KEY (`id_blog_fk`) REFERENCES `blog` (`id_blog`);

--
-- Constraints for table `exercice`
--
ALTER TABLE `exercice`
  ADD CONSTRAINT `exercice_ibfk_1` FOREIGN KEY (`id_blog_fk`) REFERENCES `blog` (`id_blog`),
  ADD CONSTRAINT `quiz_fk` FOREIGN KEY (`id_quize_fk`) REFERENCES `quize` (`id_quize`);

--
-- Constraints for table `lecture`
--
ALTER TABLE `lecture`
  ADD CONSTRAINT `lecture_ibfk_1` FOREIGN KEY (`id_course_fk`) REFERENCES `course` (`id_course`);

--
-- Constraints for table `quize`
--
ALTER TABLE `quize`
  ADD CONSTRAINT `quize_ibfk_1` FOREIGN KEY (`id_blog_fk`) REFERENCES `blog` (`id_blog`),
  ADD CONSTRAINT `quize_ibfk_2` FOREIGN KEY (`id_author_fk`) REFERENCES `author` (`id_author`),
  ADD CONSTRAINT `quize_ibfk_3` FOREIGN KEY (`id_lecture_fk`) REFERENCES `lecture` (`id_lecture`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
