-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2015 at 06:42 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ticz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES
(1, 1, 'sorting\r\n', 0),
(2, 1, 'traversal', 1),
(3, 2, 'Digraph', 1),
(4, 2, 'Direct graph', 0),
(5, 3, 'Special trees', 0),
(6, 3, 'Threaded trees', 1),
(7, 4, 'Widely Connected', 0),
(8, 4, 'Unliterally connected', 1),
(9, 5, 'Terminal nodes', 1),
(10, 5, 'Last nodes', 0),
(11, 6, 'non cycle graph', 0),
(12, 6, 'free graph', 1),
(13, 7, 'Copies', 1),
(14, 7, 'Duplicate', 0),
(15, 8, 'A tree graph', 1),
(16, 8, 'circular graph', 0),
(17, 9, 'Predecessor', 1),
(18, 9, 'Antecedents', 0),
(19, 10, 'u is adjacent to v but v is not adjacent to u', 0),
(20, 10, 'u is processor and v is successor', 1),
(21, 11, 'Array with pointers', 1),
(22, 11, 'Two dimentional arrays', 0),
(23, 12, 'Final nodes', 0),
(24, 12, 'Adjacent nodes', 1),
(25, 13, 'Overflow', 0),
(26, 13, 'Empty', 1),
(27, 14, 'binary search tree', 0),
(28, 14, 'extended binary tree', 1),
(29, 15, '6', 0),
(30, 15, '3', 1),
(31, 16, 'Dn = log2n+1', 1),
(32, 16, 'Dn = log2n', 0),
(33, 17, 'Outer node', 0),
(34, 17, 'External node', 1),
(35, 18, 'Root Left sub-tree Right sub-tree', 1),
(36, 18, 'Right sub-tree Left sub-tree and root', 0),
(37, 19, 'Internal node', 1),
(38, 19, 'Domestic node', 0),
(39, 20, 'Branch', 0),
(40, 20, 'Leaf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` text NOT NULL,
  `cdetail` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`cid`, `cname`, `cdetail`) VALUES
(1, 'admin', 'o0o'),
(2, 'admin', 'test'),
(3, 'Anonymous', 'qwe'),
(4, 'Anonymous', 'qwe'),
(5, 'Anonymous', 'we'),
(6, 'Anonymous', 'sdf'),
(7, 'Anonymous', 'sdf '),
(8, 'Anonymous', 'asd'),
(9, 'Anonymous', 'asd'),
(10, 'Anonymous', 'xcv'),
(11, 'Anonymous', 'xcv '),
(12, 'Anonymous', 'xcv '),
(13, 'Anonymous', 'sdf'),
(14, 'Anonymous', 'asd'),
(15, 'Anonymous', 'xc'),
(16, 'Anonymous', 'gh '),
(17, 'Anonymous', 'yu'),
(18, 'Anonymous', 'rty'),
(19, 'Anonymous', 'ert'),
(20, 'Anonymous', 'wer'),
(21, 'Anonymous', 'df'),
(22, 'member', 'hello'),
(23, 'Anonymous', 'asdasdasd'),
(24, 'admin', 'zxcxzc');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dtitle` text NOT NULL,
  `ddetail` text NOT NULL,
  `type` text NOT NULL,
  `day` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`did`, `dtitle`, `ddetail`, `type`, `day`, `month`, `year`, `uid`) VALUES
(1, 'TESTING', 'TESTing', 'Normal', '1', '9', '2014', 1),
(2, 'TESTING', 'TESTing', 'Important', '1', '9', '2014', 1),
(3, 'Assignment Due day', 'Expert System Assignment due day, softcopy and report.', 'Normal', '1', '9', '2014', 3),
(4, 'asdas', 'asdas', 'Important', '1', '1', '2015', 1),
(5, 'dddddddddddd', 'ddddddddddddddd', 'Normal', '1', '1', '2015', 2),
(6, 'qew', 'qwe', 'Normal', '1', '12', '2016', 2),
(7, 'df', 'df', 'Normal', '1', '12', '2016', 2),
(8, 'v', 'xc', 'Normal', '1', '12', '2016', 2);

-- --------------------------------------------------------

--
-- Table structure for table `eventcalender`
--

CREATE TABLE IF NOT EXISTS `eventcalender` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Detail` text NOT NULL,
  `eventDate` text NOT NULL,
  `dataAdded` text NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `question`, `type`) VALUES
(1, 1, 'The operation of processing each element in the list is known as ......', 'MCQ'),
(2, 2, 'Other name for directed graph is ..........', 'MCQ'),
(3, 3, 'Binary trees with threads are called as .......', 'MCQ'),
(4, 4, 'Graph G is .............. if for any pair u v of nodes in G there is a path from u to v or path from v to u.\r\n', 'MCQ'),
(5, 5, 'In Binary trees nodes with no successor are called ......', 'MCQ'),
(6, 6, 'A connected graph T without any cycles is called ........', 'MCQ'),
(7, 7, 'Trees are said .......... if they are similar and have same contents at corresponding nodes.', 'MCQ'),
(8, 8, 'A connected graph T without any cycles is called a ........', 'MCQ'),
(9, 9, 'Every node N in a binary tree T except the root has a unique parent called the ......... of N.', 'MCQ'),
(10, 10, 'In a graph if E=(uv) means ......', 'MCQ'),
(11, 11, 'Sequential representation of binary tree uses ........', 'MCQ'),
(12, 12, 'In a graph if e=[uv] Then u and v are called ........', 'MCQ'),
(13, 13, 'TREE[1]=NULL indicates tree is ........', 'MCQ'),
(14, 14, 'A binary tree whose every node has either zero or two children is called .......\r\n', 'MCQ'),
(15, 15, 'Linked representation of binary tree needs ......... parallel arrays.\r\n', 'MCQ'),
(16, 16, 'The depth of complete binary tree is given by ......', 'MCQ'),
(17, 17, 'In a 2-tree nodes with 0 children are called ............', 'MCQ'),
(18, 18, 'Which indicates pre-order traversal?', 'MCQ'),
(19, 19, 'In a extended-binary tree nodes with 2 children are called ........', 'MCQ'),
(20, 20, 'A terminal node in a binary tree is called ............', 'MCQ');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_takers`
--

CREATE TABLE IF NOT EXISTS `quiz_takers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `percentage` varchar(24) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quiz_takers`
--

INSERT INTO `quiz_takers` (`id`, `username`, `percentage`, `date_time`) VALUES
(1, 'chikin', '85', '2015-01-05 01:01:12'),
(2, 'hi', '55', '2015-01-05 01:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `utype` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `utype`, `user`, `pass`, `email`, `name`) VALUES
(1, 1, 'admin', 'admin', 'admin@admin.com', 'admin'),
(2, 0, 'member', 'member', 'member@member.com', 'member'),
(3, 0, 'sjwei', 'sjwei', 'sjwei92@gmail.com', 'abc'),
(4, 0, 'zxc', 'zxczxc', 'sjwei@gmail.com', 'zxc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
