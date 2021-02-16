-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 02:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Name` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Timming` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `TOB` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Name`, `Contact`, `Date`, `Timming`, `username`, `DOB`, `TOB`, `Location`) VALUES
('Dr Rahul Dev', '7777777777', '6/4/2020', '9:00 AM', 'rohit', '05-04-2020', '00:58', 'Borivali East'),
('Dr Hemant', '9874561237', '6/4/20', '6:00PM', 'nitesh', '05-04-2020', '11:01', 'Dadar West'),
('Dr Nimesh Mehta', '2222222222', '06/04/2020', '5:00PM', 'rohit', '05-04-2020', '11:03', 'Virar East'),
('Dr Hemant', '888888888888', '06-04-2020', '10:21', 'nitesh', '05-04-2020', '15:16', 'Dadar West'),
('Dr Hemant', '1234567890', '06/04/2020', '6:00 pm ', 'rohit', '05-04-2020', '16:10', 'Dadar west');

-- --------------------------------------------------------

--
-- Table structure for table `diabetes`
--

CREATE TABLE `diabetes` (
  `Age` int(6) NOT NULL,
  `Height` double(6,2) NOT NULL,
  `Weight` double(6,2) NOT NULL,
  `Insulin1` double(6,2) NOT NULL,
  `Insulin2` double(6,2) NOT NULL,
  `Glucose1` double(6,2) NOT NULL,
  `Glucose2` double(6,2) NOT NULL,
  `Diabetes Pedigree Function` double(6,2) NOT NULL,
  `Blood_Pressure1` double(6,2) NOT NULL,
  `Blood_Pressure2` double(6,2) NOT NULL,
  `Hameglobin_A1C_Test` double(6,2) NOT NULL,
  `Oral_Glucose_Tolerance_Test` double(6,2) NOT NULL,
  `Prediction` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diabetes`
--

INSERT INTO `diabetes` (`Age`, `Height`, `Weight`, `Insulin1`, `Insulin2`, `Glucose1`, `Glucose2`, `Diabetes Pedigree Function`, `Blood_Pressure1`, `Blood_Pressure2`, `Hameglobin_A1C_Test`, `Oral_Glucose_Tolerance_Test`, `Prediction`, `username`, `date`, `time`) VALUES
(25, 155.00, 75.00, 20.00, 100.00, 95.00, 115.00, 3.00, 141.00, 92.00, 130.00, 180.00, 'Prediabetic', 'rohit', '29-03-2020', '17:13'),
(25, 154.00, 78.00, 26.00, 166.00, 76.00, 120.00, 2.00, 100.00, 78.00, 124.00, 141.00, 'Prediabetic', 'rohit', '29-03-2020', '17:14'),
(25, 120.00, 70.00, 16.00, 88.00, 76.00, 99.00, 1.00, 102.00, 80.00, 140.00, 201.00, 'Diabetic', 'rohit', '29-03-2020', '17:15'),
(25, 110.00, 60.00, 13.00, 88.00, 75.00, 99.00, 0.00, 101.00, 80.00, 106.00, 130.00, 'Healthy/ No Diabetes', 'rohit', '29-03-2020', '17:19'),
(25, 120.00, 78.00, 22.00, 155.00, 62.00, 78.00, 1.00, 120.00, 88.00, 118.00, 138.00, 'Healthy/ No Diabetes', 'rohit', '29-03-2020', '17:23'),
(18, 120.00, 80.00, 22.00, 18.00, 80.00, 77.00, 0.00, 122.00, 89.00, 114.00, 138.00, 'Healthy/ No Diabetes', 'rohit', '29-03-2020', '17:24'),
(35, 155.00, 75.00, 16.00, 81.00, 128.00, 100.00, 3.00, 105.00, 88.00, 124.00, 142.00, 'Diabetic', 'rohit', '31-03-2020', '11:39'),
(25, 152.00, 88.00, 13.00, 44.00, 60.00, 88.00, 0.00, 120.00, 88.00, 116.00, 120.00, 'Healthy/ No Diabetes', 'nitesh', '31-03-2020', '11:43'),
(25, 152.00, 88.00, 42.00, 100.00, 100.00, 115.00, 2.00, 135.00, 90.00, 128.00, 161.00, 'Prediabetic', 'nitesh', '31-03-2020', '11:48'),
(25, 150.00, 75.00, 22.00, 40.00, 60.00, 100.00, 2.00, 102.00, 75.00, 136.00, 130.00, 'Prediabetic', 'rohit', '07-04-2020', '15:30');

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `d1` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `d3` varchar(255) NOT NULL,
  `d4` varchar(255) NOT NULL,
  `d5` varchar(255) NOT NULL,
  `total` double(6,2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`d1`, `d2`, `d3`, `d4`, `d5`, `total`, `username`, `date`, `time`) VALUES
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'One small whole wheat pita pocket, half a cup cucumber, half a cup tomatoes, half a cup lentils, half a cup leafy greens, 2 tbsp salad dressing. Total carbs: Approximately 30.', '20 10-gram baby carrots with 2 tbsp hummus. Total carbs: Approximately 21.', 'A two-thirds cup of quinoa, 8 oz silken tofu, 1 cup cooked bok choy, 1 cup steamed broccoli, 2 tsp olive oil, one kiwi. Total carbs: Approximately 44.', 'A half cup vegetable juice, 10 stuffed green olives. Total carbs: Approximately 24.', 153.00, 'rohit', '29-03-2020', '17:13'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'One small whole wheat pita pocket, half a cup cucumber, half a cup tomatoes, half a cup lentils, half a cup leafy greens, 2 tbsp salad dressing. Total carbs: Approximately 30.', 'One small peach diced into one third of a cup 2% fat cottage cheese. Total carbs: Approximately 16.', 'Half medium baked potato with skin, 2 oz broiled beef, 1 tsp butter, 1.5 cups steamed broccoli with 1 tsp nutritional yeast sprinkled on top, three-quarters cup whole strawberries. Total carbs: Approximately 41.', '1 cup low-fat plain Greek yogurt mixed with half a small banana. Total carbs: Approximately 15.', 136.00, 'rohit', '29-03-2020', '17:14'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'Mexican bowl: two-thirds of a cup low-sodium canned pinto beans, 1 cup chopped spinach, a quarter cup chopped tomatoes, a quarter cup bell peppers, 1 ounce (oz) cheese, 1 tablespoon (tbsp) salsa as sauce. Total carbs: Approximately 30.', '1 oz almonds, one small grapefruit. Total carbs: Approximately 26.', 'Half a cup (50g) succotash, 1 tsp butter, 2 oz pork tenderloin, 1 cup cooked asparagus, half a cup fresh pineapple. Total carbs: Approximately 34.', '1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.', 130.00, 'rohit', '29-03-2020', '17:15'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'Mexican bowl: two-thirds of a cup low-sodium canned pinto beans, 1 cup chopped spinach, a quarter cup chopped tomatoes, a quarter cup bell peppers, 1 ounce (oz) cheese, 1 tablespoon (tbsp) salsa as sauce. Total carbs: Approximately 30.', ' 1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.', 'Mediterranean couscous: two-thirds cup whole wheat cooked couscous, half a cup sautéed eggplant, four sundried tomatoes, five jumbo olives chopped, half a diced cucumber, 1 tbsp balsamic vinegar, fresh basil. Total carbs: Approximately 38.', '1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.', 114.00, 'rohit', '29-03-2020', '17:19'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'Sandwich: two regular slices high-fiber whole grain bread, 1 tbsp Greek plain, no-fat yogurt and 1 tbsp mustard, 3 oz canned tuna in water mixed with a quarter cup of shredded carrots, 1 tbsp dill relish, 1 cup sliced tomato, half a medium apple. Total ca', '20 10-gram baby carrots with 2 tbsp hummus. Total carbs: Approximately 21.', 'Mediterranean couscous: two-thirds cup cooked whole wheat couscous, half a cup sauteed eggplant, four sundried tomatoes, five jumbo olives chopped, half a diced cucumber, 1 tbsp balsamic vinegar, fresh basil. Total carbs: Approximately 38.', '1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.', 142.00, 'rohit', '29-03-2020', '17:20'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'Mexican bowl: two-thirds of a cup low-sodium canned pinto beans, 1 cup chopped spinach, a quarter cup chopped tomatoes, a quarter cup bell peppers, 1 ounce (oz) cheese, 1 tablespoon (tbsp) salsa as sauce. Total carbs: Approximately 30.', 'One cherry tomato and 10 baby carrots with 2 tbsp hummus. Total carbs: Approximately 14.', '2 oz salmon filet, one medium baked potato, 1 tsp butter, 1.5 cups steamed asparagus. Total carbs: Approximately 39.', ' 1 cup celery, 1.5 tsp peanut butter. Total carbs: Approximately 6.', 123.00, 'rohit', '29-03-2020', '17:21'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'Mexican bowl: two-thirds of a cup low-sodium canned pinto beans, 1 cup chopped spinach, a quarter cup chopped tomatoes, a quarter cup bell peppers, 1 ounce (oz) cheese, 1 tablespoon (tbsp) salsa as sauce. Total carbs: Approximately 30.', 'One small peach diced into one third of a cup 2% fat cottage cheese. Total carbs: Approximately 16.', '2 oz salmon filet, one medium baked potato, 1 tsp butter, 1.5 cups steamed asparagus. Total carbs: Approximately 39.', 'Half a small avocado drizzled with hot sauce. Total carbs: Approximately 9.', 128.00, 'rohit', '29-03-2020', '17:23'),
('One poached egg and half a small avocado spread on one slice of Ezekiel bread, one orange. Total carbs: Approximately 39', 'Mexican bowl: two-thirds of a cup low-sodium canned pinto beans, 1 cup chopped spinach, a quarter cup chopped tomatoes, a quarter cup bell peppers, 1 ounce (oz) cheese, 1 tablespoon (tbsp) salsa as sauce. Total carbs: Approximately 30.', 'One small peach diced into one third of a cup 2% fat cottage cheese. Total carbs: Approximately 16.', '2 oz salmon filet, one medium baked potato, 1 tsp butter, 1.5 cups steamed asparagus. Total carbs: Approximately 39.', 'Half a small avocado drizzled with hot sauce. Total carbs: Approximately 9.', 133.00, 'rohit', '29-03-2020', '17:24'),
('Sweet potato toast: two slices (100 g) toasted sweet potato, topped with 1 oz goat cheese, spinach, and 1 tsp sprinkled flaxseed. Total carbs: Approximately 44', 'One small whole wheat pita pocket, half a cup cucumber, half a cup tomatoes, half a cup lentils, half a cup leafy greens, 2 tbsp salad dressing. Total carbs: Approximately 30.', '20 10-gram baby carrots with 2 tbsp hummus. Total carbs: Approximately 21.', 'Half a cup (50g) succotash, 1 tsp butter, 2 oz pork tenderloin, 1 cup cooked asparagus, half a cup fresh pineapple. Total carbs: Approximately 34.', '1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.', 135.00, 'rohit', '31-03-2020', '11:39'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'Tacos: two corn tortillas, a one-third cup cooked black beans, 1 oz low-fat cheese, 2 tbsp avocado, 1 cup coleslaw, salsa as dressing. Total carbs: Approximately 70.', '20 peanuts, 1 cup carrots. Total carbs: Approximately 15.', 'Mediterranean couscous: two-thirds cup whole wheat cooked couscous, half a cup sautéed eggplant, four sundried tomatoes, five jumbo olives chopped, half a diced cucumber, 1 tbsp balsamic vinegar, fresh basil. Total carbs: Approximately 38.', '1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.', 163.00, 'nitesh', '31-03-2020', '11:43'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'Tacos: two corn tortillas, a one-third cup cooked black beans, 1 oz low-fat cheese, 2 tbsp avocado, 1 cup coleslaw, salsa as dressing. Total carbs: Approximately 70.', '20 peanuts, 1 cup carrots. Total carbs: Approximately 15.', 'Mediterranean couscous: two-thirds cup cooked whole wheat couscous, half a cup sauteed eggplant, four sundried tomatoes, five jumbo olives chopped, half a diced cucumber, 1 tbsp balsamic vinegar, fresh basil. Total carbs: Approximately 38.', 'A half cup vegetable juice, 10 stuffed green olives. Total carbs: Approximately 24.', 181.00, 'nitesh', '31-03-2020', '11:48'),
(' 1 cup (100g) cooked oatmeal, three-quarters of a cup blueberries, 1 oz almonds, 1 teaspoon (tsp) chia seeds. Total carbs: Approximately 34', 'Salad: 2 cups spinach, a quarter cup tomatoes, 1 oz cheddar cheese, one boiled chopped egg, 2 tbsp yogurt dressing, a quarter cup grapes, 1 tsp pumpkin seeds, 2 oz roasted chickpeas. Total carbs: Approximately 47.', '20 10-gram baby carrots with 2 tbsp hummus. Total carbs: Approximately 21.', '2 oz salmon filet, one medium baked potato, 1 tsp butter, 1.5 cups steamed asparagus. Total carbs: Approximately 39.', '1 cup celery with 1 tbsp peanut butter. Total carbs: Approximately 6.', 147.00, 'rohit', '07-04-2020', '15:30');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Name` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `CCC` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Timmings` varchar(255) NOT NULL,
  `Login_Id` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Name`, `Age`, `Specialization`, `Date`, `Time`, `CCC`, `Location`, `Timmings`, `Login_Id`, `Password`) VALUES
('Dr Hemant', 25, 'Diabetes', '05-04-2020', '10:21', '8888888888', 'Dadar West', '5:00PM-8:00PM', 'Dr Hemant', 'Dr Hemant'),
('Dr Rahul Dev', 55, 'Physician', '05-04-2020', '10:22', '9876543210', 'Borivali East', '8:00AM-12:00PM', 'Dr Rahul Dev', 'Dr Rahul Dev'),
('Dr Nimesh Mehta', 46, 'Diabetes', '05-04-2020', '10:23', '9820298202', 'Virar East', '2:00PM-6:00PM', 'Dr Nimesh Mehta', 'Dr Nimesh Mehta');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `e1` varchar(255) NOT NULL,
  `e2` varchar(255) NOT NULL,
  `e3` varchar(255) NOT NULL,
  `e4` varchar(255) NOT NULL,
  `e5` varchar(255) NOT NULL,
  `e6` varchar(255) NOT NULL,
  `e7` varchar(255) NOT NULL,
  `e8` varchar(255) NOT NULL,
  `e9` varchar(255) NOT NULL,
  `e10` varchar(255) NOT NULL,
  `e11` varchar(255) NOT NULL,
  `total` double(6,2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `e10`, `e11`, `total`, `username`, `date`, `time`) VALUES
('30 push up ', '20 Jump Squats', '10 plank leg raises', '15 sit ups', '8 reverse crunches', '45 min jogging', '10 high knees', '18 pilates ', '10 knee pullins', '10 Mountain Climbers', '10 pilates', 579.40, 'rohit', '29-03-2020', '17:13'),
('30 push up ', '20 Jump Squats', '13 plank leg raises', '10 bicycle crunches', '20 reverse crunches', '40 min brisk walk', '12  high knees', '12  Crunches', '12 Russian Twists', '25 leg raises', '15 jumping ropes', 809.00, 'rohit', '29-03-2020', '17:14'),
('30 push up ', '10 dumbbell rows', '8 plank leg raises', '13 sit ups ', '8 reverse crunches', '40 min brisk walk', '20 climbers', '14 Crunches', '12 Russian Twists', '22 Mountain Climbers', ' 25 pilates ', 856.10, 'rohit', '29-03-2020', '17:15'),
('30 push up ', '10 dumbbell rows', '15 burpees', '10 sit ups', '8 reverse crunches', '33 min cycling  ', '20 climbers', '14 Crunches', '12 Russian Twists', ' 10 leg raises', '10 jumping ropes ', 637.80, 'rohit', '29-03-2020', '17:19'),
('30 push up ', '28 Jump Squats ', '10 plank leg raises', '17 bicycle crunches', '8 reverse crunches', '33 min cycling  ', '20 climbers', '18 pilates ', '8 knee pullins', ' 10 leg raises', '10 jumping ropes ', 601.80, 'rohit', '29-03-2020', '17:20'),
('30 push up ', '10 dumbbell rows', '18  burpees', '17 sit ups', '18 reverse crunches', '45 min jogging', '13 high knees', '14 Crunches', '8 knee pullins', ' 10 leg raises', ' 25 pilates ', 853.80, 'rohit', '29-03-2020', '17:21'),
('30 push up ', '10 dumbbell rows', '13 plank leg raises', '17 sit ups', '18 reverse crunches', '33 min cycling  ', '18 climbers', '11 pilates', '8 knee pullins', '15 leg raises', '10 jumping ropes ', 578.70, 'rohit', '29-03-2020', '17:23'),
('28 pushup ', '10 dumbbell rows', '13 plank leg raises', '17 sit ups', '12 Jump Jacks ', '40 min brisk walk', '18 climbers', ' 13 pilates', '8 knee pullins', ' 10 leg raises', '10 jumping ropes ', 552.90, 'rohit', '29-03-2020', '17:24'),
('35 push up', '20 Jump Squats', '10 plank leg raises', '13 sit ups ', '8 reverse crunches', '35 min swimming/run', '20 climbers', '14 Crunches', '8 knee pullins', '25 leg raises', '15 jumping ropes', 776.40, 'rohit', '31-03-2020', '11:39'),
('30 push up ', '18 Jump Squats', '15 plank leg raises', '10 sit ups', '15 Jump Jacks', '35 min jogging', '20 climbers', '11 pilates', '8 knee pullins', ' 10 leg raises', '10 jumping ropes ', 578.50, 'nitesh', '31-03-2020', '11:43'),
('30 push up ', '18 Jump Squats', '15 plank leg raises', '17 bicycle crunches', '8 reverse crunches', '38 min bicycle ride', '10 high knees', '15 pilates', '8 knee pullins', '10 Mountain Climbers', '10 pilates', 571.30, 'nitesh', '31-03-2020', '11:48'),
('', '', '', '', '', '', '', '', '', '', '', 0.00, '', '04-04-2020', '18:51'),
('30 push up ', '16 Jump Squats', '10 plank leg raises', '17 sit ups', '12 Jump Jacks ', '35 min jogging', '20 climbers', '14 Crunches', '10 Russian Twists', '20 Mountain Climbers', '10 jumping ropes ', 735.40, 'rohit', '07-04-2020', '15:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
