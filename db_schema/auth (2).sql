-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 09:45 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `formnum` bigint(20) NOT NULL,
  `firstname` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` decimal(10,0) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob,
  `doc1` blob,
  `doc2` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `formnum`, `firstname`, `lastname`, `age`, `gender`, `nationality`, `address`, `city`, `pincode`, `category`, `email`, `phone`, `image`, `doc1`, `doc2`) VALUES
(1, 400, 'Ramu', 'baba', '20', 'male', 'United States', 'B-104,AshaANgan', 'Mumbai', '421204', 'educational', 'vivekiyer98@gmail.com', '9930838982', 0x31303434343434375f3631373633393635343939383139385f333438323430333134393438393436363630385f6e2e6a7067, 0x31303434343434375f3631373633393635343939383139385f333438323430333134393438393436363630385f6e2e6a7067, 0x31303434343434375f3631373633393635343939383139385f333438323430333134393438393436363630385f6e2e6a7067),
(2, 178, 'Kaviii', 'Iyer', '23', 'male', 'United States', 'B-104,Asha Angan', 'Mumbai', '421204', 'educational', 'vivekiyer98@gmail.com', '9930838982', 0x4b6f616c612e6a7067, 0x4b6f616c612e6a7067, 0x4b6f616c612e6a7067),
(3, 178, 'Vivek', 'Iyer', '23', 'male', 'United States', 'B-104,Asha Angan', 'Mumbai', '421204', 'educational', 'vivekiyer98@gmail.com', '9930838982', 0x4b6f616c612e6a7067, 0x4b6f616c612e6a7067, 0x4b6f616c612e6a7067),
(4, 178, '1', 'Iyer', '23', 'male', 'United States', 'B-104,Bhasha Bhai', 'Mumbai', '421204', 'educational', 'vivekiyer98@gmail.com', '9930838982', 0x4b6f616c612e6a7067, 0x4b6f616c612e6a7067, 0x4b6f616c612e6a7067),
(5, 178, 'Vivek', 'Iyer', '23', 'male', 'United States', 'B-104,Asha Angan', 'Mumbai', '421204', 'educational', 'vivekiyer98@gmail.com', '9930838982', 0x4465736572742e6a7067, 0x4a656c6c79666973682e6a7067, 0x4c69676874686f7573652e6a7067),
(6, 178, 'sahil', 'Iyer', '23', 'male', 'United States', 'B-104,Asha Angan', 'Mumbai', '421204', 'educational', 'vivekiyer98@gmail.com', '9930838982', NULL, NULL, NULL),
(7, 211, 'Vivek', 'Iyer', '23', 'male', 'United States', 'B-104,Asha Angan', 'Mumbai', '421204', 'educational', 'vivekiyer98@gmail.com', '9930838982', NULL, NULL, NULL),
(8, 313, 'Vivek', 'Iyer', '23', 'male', 'United States', 'B-104,Asha Angan', 'Mumbai', '421204', 'educational', 'vivekiyer98@gmail.com', '9930838982', NULL, NULL, NULL),
(9, 123, 'Vivek', 'Bhise', '20', 'male', 'United States', 'bhggfy', 'gvhfcfgd', '427446', 'educational', 'vivekiyer98@gmail.com', '9930838982', 0x4368727973616e7468656d756d2e6a7067, 0x4c69676874686f7573652e6a7067, 0x50656e6775696e732e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `banks_master`
--

CREATE TABLE `banks_master` (
  `b_code` int(11) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `b_city` varchar(20) NOT NULL,
  `b_branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks_master`
--

INSERT INTO `banks_master` (`b_code`, `b_name`, `b_city`, `b_branch`) VALUES
(1, 'icici', 'mumbai', 'chembur'),
(2, 'iob', 'mumbai', 'dombivli'),
(3, 'kotak mahindra', 'Kalyan', 'East'),
(4, 'UCO', 'Dombivli', 'West'),
(5, 'Vyasa', 'Kopar', 'West');

-- --------------------------------------------------------

--
-- Table structure for table `disbursements`
--

CREATE TABLE `disbursements` (
  `disbursement_id` int(11) NOT NULL,
  `fo_id` int(11) NOT NULL,
  `fo_acc_code` int(11) NOT NULL,
  `disbursement_amount` float NOT NULL,
  `cheque_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(11) NOT NULL,
  `fo_acc_code` int(11) NOT NULL,
  `expense_type` varchar(20) NOT NULL,
  `expense_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_id`, `fo_acc_code`, `expense_type`, `expense_amount`) VALUES
(1, 3, 'SALARY', 2000),
(2, 5, 'SALARY', 2000),
(3, 6, 'SALARY', 8000),
(4, 6, 'SALARY', 1000),
(5, 6, 'SALARY', 1000),
(6, 6, 'SALARY', 1000),
(7, 2, 'SALARY', 9000),
(8, 2, 'SALARY', 999),
(9, 2, 'SALARY', 999),
(10, 2, 'SALARY', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `fixed_deposits`
--

CREATE TABLE `fixed_deposits` (
  `fd_no` int(11) NOT NULL,
  `fo_tr_code` int(11) NOT NULL,
  `deposit_date` date NOT NULL,
  `rate_of_interest` float NOT NULL,
  `maturity_amount` int(11) NOT NULL,
  `maturity_date` date NOT NULL,
  `maturity_transfer_acc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_18_135820_create_a_website_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('karthikshankar878@gmail.com', '$2y$10$FpYLIjozxlDQDAkQCynJQu3glnAfSwU.mjDyNla6KZuu9oXn2wTT.', '2018-07-23 03:15:50'),
('vivekiyer98@gmail.com', '$2y$10$CQsqJLj5CwF7RBOWD999QumZaU8FHTkgrRuRoapnzzy8x1XcTXbv.', '2018-07-23 08:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `savings_master`
--

CREATE TABLE `savings_master` (
  `fo_b_code` int(11) NOT NULL,
  `acc_holder` varchar(20) NOT NULL,
  `acc_code` int(11) NOT NULL,
  `acc_number` varchar(20) NOT NULL,
  `acc_balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savings_master`
--

INSERT INTO `savings_master` (`fo_b_code`, `acc_holder`, `acc_code`, `acc_number`, `acc_balance`) VALUES
(1, 'bhavin', 1, 'SB2ABC324', -13000),
(2, 'Vivek Iyer', 2, '12A34B23', 983000),
(2, 'Venkat Iyer', 3, 'ABCSAD', -9000),
(4, 'Vivek Iyer', 4, 'SB12989', -6000),
(4, 'Venkat Iyer', 5, 'SB989898', -4000),
(5, 'Shankar', 6, 'SB69', 0);

-- --------------------------------------------------------

--
-- Table structure for table `savings_trans`
--

CREATE TABLE `savings_trans` (
  `fo_acc_code` int(11) NOT NULL,
  `tr_code` int(11) NOT NULL,
  `tr_date` date NOT NULL,
  `credit` float NOT NULL,
  `debit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Vivek', 'vivekiyer98@gmail.com', '$2y$10$a6Lmh5jfH54Crx/SMzgfS.h1M/CNJi2vt5HyyKUUYRdw/QIrXqm2K', 'DRO5FpF4DLkK4YWpCeo9L2eBXKVZMcQGnL1C5SFBwCUHfG1r8mCd1OocNF6g', '2018-07-04 11:40:11', '2018-07-04 11:40:11'),
(4, 'abc', 'karthikshankar878@gmail.com', '$2y$10$JRIayi0JxgL.t30tnrXddet0nTGjy.YOCaswzeYP7/3FDUFKx4j6u', NULL, '2018-07-20 09:27:13', '2018-07-20 09:27:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks_master`
--
ALTER TABLE `banks_master`
  ADD PRIMARY KEY (`b_code`);

--
-- Indexes for table `disbursements`
--
ALTER TABLE `disbursements`
  ADD PRIMARY KEY (`disbursement_id`),
  ADD KEY `FOREIGNA` (`fo_id`),
  ADD KEY `FOREIGNB` (`fo_acc_code`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`),
  ADD KEY `FOREIGN` (`fo_acc_code`);

--
-- Indexes for table `fixed_deposits`
--
ALTER TABLE `fixed_deposits`
  ADD PRIMARY KEY (`fd_no`),
  ADD KEY `FOREIGN` (`fo_tr_code`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `savings_master`
--
ALTER TABLE `savings_master`
  ADD PRIMARY KEY (`acc_code`),
  ADD KEY `FOREIGN` (`acc_holder`) USING BTREE,
  ADD KEY `fo_b_code` (`fo_b_code`);

--
-- Indexes for table `savings_trans`
--
ALTER TABLE `savings_trans`
  ADD PRIMARY KEY (`tr_code`),
  ADD KEY `FOREIGN` (`fo_acc_code`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banks_master`
--
ALTER TABLE `banks_master`
  MODIFY `b_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `disbursements`
--
ALTER TABLE `disbursements`
  MODIFY `disbursement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fixed_deposits`
--
ALTER TABLE `fixed_deposits`
  MODIFY `fd_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `savings_master`
--
ALTER TABLE `savings_master`
  MODIFY `acc_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `savings_trans`
--
ALTER TABLE `savings_trans`
  MODIFY `tr_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `savings_master`
--
ALTER TABLE `savings_master`
  ADD CONSTRAINT `savings_master_ibfk_1` FOREIGN KEY (`fo_b_code`) REFERENCES `banks_master` (`b_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
