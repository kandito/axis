-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2014 at 08:38 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugasmki`
--

-- --------------------------------------------------------

--
-- Table structure for table `mki_assesments`
--

CREATE TABLE IF NOT EXISTS `mki_assesments` (
  `id_assesment` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `objectives` text,
  `location` text,
  `requirements` text,
  `id_system` int(11) DEFAULT NULL,
  `id_standard` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_assesment`),
  KEY `fk_step_assesment_system` (`id_system`),
  KEY `fk_assesment_standard` (`id_standard`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mki_standards`
--

CREATE TABLE IF NOT EXISTS `mki_standards` (
  `id_standard` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `purpose` text,
  `scope` text,
  `audience` text,
  `description` text,
  PRIMARY KEY (`id_standard`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mki_standards`
--

INSERT INTO `mki_standards` (`id_standard`, `name`, `purpose`, `scope`, `audience`, `description`) VALUES
(1, 'NIST SP 800-53', 'Provide some controls for assessments procedure  that required security controls', 'Whole organization', 'Whole staffs', 'Security Assessment Standar from NIST SP 800-53');

-- --------------------------------------------------------

--
-- Table structure for table `mki_steps`
--

CREATE TABLE IF NOT EXISTS `mki_steps` (
  `id_step` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `order` int(11) DEFAULT NULL,
  `notes` text,
  `guidelines` text,
  `tools` text,
  `id_standard` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_step`),
  KEY `fk_step_standard` (`id_standard`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=173 ;

--
-- Dumping data for table `mki_steps`
--

INSERT INTO `mki_steps` (`id_step`, `name`, `description`, `order`, `notes`, `guidelines`, `tools`, `id_standard`) VALUES
(1, 'PL-5.1', 'Examine organizational records or documents to determine if the organization conducts a privacy impact assessment on the information system.', 1, 'Please check it carefully', '', '', 1),
(2, 'PL-5.2', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the privacy impact assessment control is implemented.\r\n', 2, '', '', '', 1),
(3, 'PL-5.1\r\n', 'Examine organizational records or documents to determine if the organization conducts a privacy impact assessment on the information system.\r\n', 3, NULL, NULL, NULL, 1),
(4, 'PL-5.2\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the privacy impact assessment control is implemented.\r\n', 4, NULL, NULL, NULL, 1),
(5, 'PL-5.3\r\n', 'Interview selected organizational personnel with security planning and plan implementation responsibilities and examine organizational records or documents to determine if the organization consistently conducts privacy impact assessments on the information system on an ongoing basis.\r\n', 5, NULL, NULL, NULL, 1),
(6, 'PL-5.4\r\n', 'Interview selected organizational personnel with security planning and plan implementation responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the privacy impact assessment control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 6, NULL, NULL, NULL, 1),
(7, 'RA-2.1\r\n', 'Examine the system security plan to determine if the security categorization of the information system: (i) exists; (ii) is consistent with FIPS 199; (iii) includes supporting rationale consistent with NIST Special Publication 800-60; and (iv) is reviewed and approved by designated senior-level officials within the organization.\r\n', 7, NULL, NULL, NULL, 1),
(8, 'RA-2.2\r\n', 'Interview selected organizational personnel with risk assessment responsibilities to determine if the security categorization process is conducted as an organization-wide exercise with the involvement of senior-level officials including, but not limited to, authorizing officials, information system owners, chief information officer, senior agency information security officer, and information owners.\r\n', 8, NULL, NULL, NULL, 1),
(9, 'RA-2.3\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the security categorization control is implemented.\r\n', 9, NULL, NULL, NULL, 1),
(10, 'RA-2.4\r\n', 'Interview selected organizational personnel with risk assessment responsibilities and examine organizational records or documents to determine if the organization consistently conducts security categorizations of the information system on an ongoing basis.\r\n', 10, NULL, NULL, NULL, 1),
(11, 'RA-2.5\r\n', 'Interview selected organizational personnel with risk assessment responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the security categorization control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 11, NULL, NULL, NULL, 1),
(13, 'RA-4.1\r\n', 'Examine organizational records or documents to determine if the risk assessment is updated in accordance with organization-defined frequency or whenever there are significant changes to the information system, the facilities where the system resides, or other conditions that may impact the security or accreditation status of the system.\r\n', 13, NULL, NULL, NULL, 1),
(14, 'RA-4.2\r\n', 'Examine the risk assessment to determine if the report reflects the latest significant changes to the information system, the facilities where the system resides, or other conditions that may have impacted the security or accreditation status of the system.\r\n', 14, NULL, NULL, NULL, 1),
(15, 'RA-4.3\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the risk assessment update control is implemented.\r\n', 15, NULL, NULL, NULL, 1),
(16, 'RA-4.4\r\n', 'Interview selected organizational personnel with risk assessment responsibilities and examine organizational records or documents to determine if the organization consistently reviews and updates the risk assessment for the information system on an ongoing basis.\r\n', 16, NULL, NULL, NULL, 1),
(17, 'RA-4.5\r\n', 'Interview selected organizational personnel with risk assessment responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the risk assessment update control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 17, NULL, NULL, NULL, 1),
(20, 'OMB M-06-16\r\n', '"1. For Personally Identifiable Information physically removed: a. Does the policy explicitly identify the rules for determining whether physical removal is allowed?b. For personally identifiable information that can be removed, does the policy require the information be encrypted and that appropriate procedures, training, and accountability measures are in place to ensure that remote use of this encrypted information does not result in bypassing the protections provided by the encryption?"\r\n', 20, NULL, NULL, NULL, 1),
(21, 'OMB M-06-16\r\n', '"2. For Personally Identifiable Information accessed remotely:a. Does the policy explicitly identify the rules for determining whether remote access is allowed?b. When remote access is allowed, does the policy require that this access be accomplished via a virtual private network (VPN) connection established using agency-issued authentication certificate(s) or hardware token?c. When remote access is allowed, does the policy identify the rules for determining whether download and remote storage of the information is allowed? (For example, the policy could permit remote access to a database, but prohibit downloading and local storage of that database.)"\r\n', 21, NULL, NULL, NULL, 1),
(23, 'AC-1.1\r\n', 'Examine organizational records or documents to determine if access control policy and procedures: (i) exist; (ii) are documented; (iii) are disseminated to appropriate elements within the organization; (iv) are periodically reviewed by responsible parties within the organization; and (v) are updated, when organizational review indicates updates are required.\r\n', 23, NULL, NULL, NULL, 1),
(24, 'AC-1.2\r\n', 'Examine the access control policy to determine if the policy adequately addresses purpose, scope, roles, responsibilities, management commitment, coordination among organizational entities, and compliance.\r\n', 24, NULL, NULL, NULL, 1),
(25, 'AC-1.3\r\n', 'Examine the access control procedures to determine if the procedures are sufficient to address all areas identified in the access control policy and all associated access controls.\r\n', 25, NULL, NULL, NULL, 1),
(26, 'AC-1.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the access control policy and procedures control is implemented.\r\n', 26, NULL, NULL, NULL, 1),
(27, 'AC-1.5\r\n', 'Examine the access control policy to determine if the policy is consistent with the organizationâ€™s mission, functions, and associated laws, directives, policies regulations, standards, and guidance.\r\n', 27, NULL, NULL, NULL, 1),
(28, 'AC-1.6\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if the organization consistently applies the access control policy and procedures on an ongoing basis.\r\n', 28, NULL, NULL, NULL, 1),
(29, 'AC-1.7\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the access control policy and procedures control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 29, NULL, NULL, NULL, 1),
(30, 'AT-1.1\r\n', 'Examine organizational records or documents to determine if security awareness and training policy and procedures: (i) exist; (ii) are documented; (iii) are disseminated to appropriate elements within the organization; (iv) are periodically reviewed by responsible parties within the organization; and (v) are updated, when organizational review indicates updates are required.\r\n', 30, NULL, NULL, NULL, 1),
(31, 'AT-1.2\r\n', 'Examine the security awareness and training policy to determine if the policy adequately addresses purpose, scope, roles, responsibilities, management commitment, coordination among organizational entities, and compliance.\r\n', 31, NULL, NULL, NULL, 1),
(32, 'AT-1.3\r\n', 'Examine the security awareness and training procedures to determine if the procedures are sufficient to address all areas identified in the security awareness and training policy and all associated security awareness and training controls.\r\n', 32, NULL, NULL, NULL, 1),
(33, 'AT-1.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the security awareness and training policy and procedures control is implemented.\r\n', 33, NULL, NULL, NULL, 1),
(34, 'AT-1.5\r\n', 'Examine the security awareness and training policy to determine if the policy is consistent with the organizationâ€™s mission, functions, and associated laws, directives, policies regulations, standards, and guidance.\r\n', 34, NULL, NULL, NULL, 1),
(35, 'AT-1.6\r\n', 'Interview selected organizational personnel with security awareness and training responsibilities and examine organizational records or documents to determine if the organization consistently applies the access control policy and procedures on an ongoing basis.\r\n', 35, NULL, NULL, NULL, 1),
(36, 'AT-1.7\r\n', 'Interview selected organizational personnel with security awareness and training responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the security awareness and training policy and procedures control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 36, NULL, NULL, NULL, 1),
(37, 'AU-1.1\r\n', 'Examine organizational records or documents to determine if the audit and accountability policy and procedures: (i) exist; (ii) are documented; (iii) are disseminated to appropriate elements within the organization; (iv) are periodically reviewed by responsible parties within the organization; and (v) are updated, when organizational review indicates updates are required.\r\n', 37, NULL, NULL, NULL, 1),
(38, 'AU-1.2\r\n', 'Examine the audit and accountability policy to determine if the policy adequately addresses purpose, scope, roles, responsibilities, management commitment, coordination among organizational entities, and compliance.\r\n', 38, NULL, NULL, NULL, 1),
(39, 'AU-1.3\r\n', 'Examine the audit and accountability procedures to determine if the procedures are sufficient to address all areas identified in the audit and accountability policy and all associated audit and accountability controls.\r\n', 39, NULL, NULL, NULL, 1),
(40, 'AU-1.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the audit and accountability policy and procedures control is implemented.\r\n', 40, NULL, NULL, NULL, 1),
(41, 'AU-1.5\r\n', 'Examine the audit and accountability policy to determine if the policy is consistent with the organizationâ€™s mission, functions, and associated laws, directives, policies regulations, standards, and guidance.\r\n', 41, NULL, NULL, NULL, 1),
(42, 'AU-1.6\r\n', 'Interview selected organizational personnel with audit and accountability responsibilities and examine organizational records or documents to determine if the organization consistently applies the audit and accountability policy and procedures on an ongoing basis.\r\n', 42, NULL, NULL, NULL, 1),
(43, 'AU-1.7\r\n', 'Interview selected organizational personnel with audit and accountability responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the audit and accountability policy and procedures control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 43, NULL, NULL, NULL, 1),
(44, 'IA-1.1\r\n', 'Examine organizational records or documents to determine if identification and authentication policy and procedures: (i) exist; (ii) are documented; (iii) are disseminated to appropriate elements within the organization; (iv) are periodically reviewed by responsible parties within the organization; and (v) are updated, when organizational review indicates updates are required.\r\n', 44, NULL, NULL, NULL, 1),
(45, 'IA-1.2\r\n', 'Examine the identification and authentication policy to determine if the policy adequately addresses purpose, scope, roles, responsibilities, management commitment, coordination among organizational entities, and compliance.\r\n', 45, NULL, NULL, NULL, 1),
(46, 'IA-1.3\r\n', 'Examine the identification and authentication procedures to determine if the procedures are sufficient to address all areas identified in the identification and authentication policy and all associated identification and authentication controls.\r\n', 46, NULL, NULL, NULL, 1),
(47, 'IA-1.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the identification and authentication policy and procedures control is implemented.\r\n', 47, NULL, NULL, NULL, 1),
(48, 'IA-1.5\r\n', 'Examine the identification and authentication policy to determine if the policy is consistent with the organizationâ€™s mission, functions, and associated laws, directives, policies regulations, standards, and guidance.\r\n', 48, NULL, NULL, NULL, 1),
(49, 'IA-1.6\r\n', 'Interview selected organizational personnel with identification and authentication responsibilities and examine organizational records or documents to determine if the organization consistently applies the identification and authentication policy and procedures on an ongoing basis.\r\n', 49, NULL, NULL, NULL, 1),
(50, 'IA-1.7\r\n', 'Interview selected organizational personnel with identification and authentication responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the identification and authentication policy and procedures control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 50, NULL, NULL, NULL, 1),
(51, 'MP-1.1\r\n', 'Examine organizational records or documents to determine if the media protection policy and procedures: (i) exist; (ii) are documented; (iii) are disseminated to appropriate elements within the organization; (iv) are periodically reviewed by responsible parties within the organization; and (v) are updated, when organizational review indicates updates are required.\r\n', 51, NULL, NULL, NULL, 1),
(52, 'MP-1.2\r\n', 'Examine the media protection policy to determine if the policy adequately addresses purpose, scope, roles, responsibilities, management commitment, coordination among organizational entities, and compliance.\r\n', 52, NULL, NULL, NULL, 1),
(53, 'MP-1.3\r\n', 'Examine the media protection procedures to determine if the procedures are sufficient to address all areas identified in the media protection policy and all associated media protection controls.\r\n', 53, NULL, NULL, NULL, 1),
(54, 'MP-1.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the media protection policy and procedures control is implemented.\r\n', 54, NULL, NULL, NULL, 1),
(55, 'MP-1.5\r\n', 'Examine the media protection policy to determine if the policy is consistent with the organizationâ€™s mission, functions, and associated laws, directives, policies regulations, standards, and guidance.\r\n', 55, NULL, NULL, NULL, 1),
(56, 'MP-1.6\r\n', 'Interview selected organizational personnel with media protection responsibilities and examine organizational records or documents to determine if the organization consistently applies the media protection policy and procedures on an ongoing basis.\r\n', 56, NULL, NULL, NULL, 1),
(57, 'MP-1.7\r\n', 'Interview selected organizational personnel with media protection responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the media protection policy and procedures control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 57, NULL, NULL, NULL, 1),
(58, 'SC-1.1\r\n', 'Examine organizational records or documents to determine if system and communications protection policy and procedures: (i) exist; (ii) are documented; (iii) are disseminated to appropriate elements within the organization; (iv) are periodically reviewed by responsible parties within the organization; and (v) are updated, when organizational review indicates updates are required.\r\n', 58, NULL, NULL, NULL, 1),
(59, 'SC-1.2\r\n', 'Examine the system and communications protection policy to determine if the policy adequately addresses purpose, scope, roles, responsibilities, management commitment, coordination among organizational entities, and compliance.\r\n', 59, NULL, NULL, NULL, 1),
(60, 'SC-1.3\r\n', 'Examine the system and communications protection procedures to determine if the procedures are sufficient to address all areas identified in the system and communications protection policy and all associated system and communications protection controls.\r\n', 60, NULL, NULL, NULL, 1),
(61, 'SC-1.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the system and communications protection policy and procedures control is implemented.\r\n', 61, NULL, NULL, NULL, 1),
(62, 'SC-1.5\r\n', 'Examine the system and communications protection policy to determine if the policy is consistent with the organizationâ€™s mission, functions, and associated laws, directives, policies regulations, standards, and guidance.\r\n', 62, NULL, NULL, NULL, 1),
(63, 'SC-1.6\r\n', 'Interview selected organizational personnel with system and communications protection responsibilities and examine organizational records or documents to determine if the organization consistently applies the system and communications protection policy and procedures on an ongoing basis.\r\n', 63, NULL, NULL, NULL, 1),
(64, 'SC-1.7\r\n', 'Interview selected organizational personnel with system and communications protection responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the system and communications protection policy and procedures control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 64, NULL, NULL, NULL, 1),
(67, 'MP-5.1\r\n', 'Examine organizational records or documents to determine if the organization restricts the pickup, receipt, transfer, and delivery of information system media (paper and digital) to authorized personnel.\r\n', 67, NULL, NULL, NULL, 1),
(68, 'MP-5.2\r\n', 'Examine the list of personnel that have been authorized for the pickup, receipt, transfer, and delivery of information system media to determine if access is appropriately restricted.\r\n', 68, NULL, NULL, NULL, 1),
(69, 'MP-5.3\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the media transport control is implemented.\r\n', 69, NULL, NULL, NULL, 1),
(70, 'MP-5.4\r\n', 'Interview selected organizational personnel with media protection responsibilities and examine organizational records or documents to determine if the organization consistently transports in a secure manner information system media on an ongoing basis.\r\n', 70, NULL, NULL, NULL, 1),
(71, 'MP-5.5\r\n', 'Interview selected organizational personnel with media protection responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the media transport control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 71, NULL, NULL, NULL, 1),
(72, 'SC-13.1\r\n', 'Examine organizational records or documents (including developer design documentation) to determine if the employed cryptography complies with applicable federal laws, directives, policies, regulations, standards, and guidance, including FIPS 140-2 which requires the system to perform all cryptographic operations (including key generation) using FIPS 140-2 validated cryptographic modules operating in approved modes of operation.\r\n', 72, NULL, NULL, NULL, 1),
(73, 'SC-13.2\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the use of validated cryptography control is implemented.\r\n', 73, NULL, NULL, NULL, 1),
(74, 'SC-13.3\r\n', 'Interview selected organizational personnel with system and communications protection responsibilities and examine organizational records or documents to determine if the organization consistently uses validated cryptography within the information system on an ongoing basis.\r\n', 74, NULL, NULL, NULL, 1),
(75, 'SC-13.4\r\n', 'Interview selected organizational personnel with system and communications protection responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the use of validated cryptography control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 75, NULL, NULL, NULL, 1),
(77, 'PL-4.1\r\n', 'Examine organizational records or documents to determine if the organization provides and makes readily available to all information system users a set of rules that describes users responsibilities and expected behavior with regard to information and information system usage.\r\n', 77, NULL, NULL, NULL, 1),
(78, 'PL-4.2\r\n', 'Examine organizational records or documents to determine if the organization receives a signed acknowledgement from users indicating that they have read, understand, and agree to abide by the rules of behavior, before authorizing access to the information system and its resident information.\r\n', 78, NULL, NULL, NULL, 1),
(79, 'PL-4.3\r\n', 'Examine the rules of behavior to determine if the content is consistent with NIST Special Publication 800-18.\r\n', 79, NULL, NULL, NULL, 1),
(80, 'PL-4.4\r\n', 'Interview selected organizational personnel to determine if they understand the rules of behavior for the information system.\r\n', 80, NULL, NULL, NULL, 1),
(81, 'PL-4.5\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the rules of behavior control is implemented.\r\n', 81, NULL, NULL, NULL, 1),
(82, 'PL-4.6\r\n', 'Interview selected organizational personnel with security planning and plan implementation responsibilities and examine organizational records or documents to determine if the organization consistently reviews and updates the rules of behavior on an ongoing basis.\r\n', 82, NULL, NULL, NULL, 1),
(83, 'PL-4.7\r\n', 'Interview selected organizational personnel with security planning and plan implementation responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the rules of behavior control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 83, NULL, NULL, NULL, 1),
(84, 'SC-4.1\r\n', 'Interview selected organizational personnel with system and communications protection responsibilities and examine organizational records or documents (including developer design documentation) to determine if the information system prevents unauthorized and unintended information transfer via shared system resources and how the system prevents the transfer.\r\n', 84, NULL, NULL, NULL, 1),
(85, 'SC-4.2\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the information remnants control is implemented.\r\n', 85, NULL, NULL, NULL, 1),
(86, 'SC-4.3\r\n', 'Interview selected organizational personnel with system and communications protection responsibilities and examine organizational records or documents (including developer design documentation) to determine if the information system employs appropriate mechanisms to consistently prevent unauthorized and unintended transfer of information via shared system resources on an ongoing basis.\r\n', 86, NULL, NULL, NULL, 1),
(87, 'SC-4.4\r\n', 'Interview selected organizational personnel with system and communications protection responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the information remnants control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 87, NULL, NULL, NULL, 1),
(91, 'AC-17.1\r\n', 'Examine organizational records or documents to determine if remote access is: (i) monitored on a periodic basis in accordance with organization policy; (ii) restricted through dial-up connections or protects against unauthorized connections or subversion of unauthorized connections; (iii) authorized and restricted to users with an operational need for access; and (iv) restricted to only allow privileged access based on compelling operational needs.\r\n', 91, NULL, NULL, NULL, 1),
(92, 'AC-17.2\r\n', 'Examine organizational records or documents to determine if remote access activity is being recorded in logs and reviewed periodically in accordance with the organizational policy and procedures.\r\n', 92, NULL, NULL, NULL, 1),
(93, 'AC-17.3\r\n', 'Examine organizational records or documents to determine if remote access is documented and authorized by the appropriate organization officials.\r\n', 93, NULL, NULL, NULL, 1),
(94, 'AC-17.4\r\n', 'Examine the configuration of the information system to determine if controls are employed to restrict remote access to the system.\r\n', 94, NULL, NULL, NULL, 1),
(95, 'AC-17.5\r\n', 'Examine a system-generated list of user accounts with remote access and determine if the established procedures are followed to authorize remote access for the accounts.\r\n', 95, NULL, NULL, NULL, 1),
(96, 'AC-17.6\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the remote access control is implemented.\r\n', 96, NULL, NULL, NULL, 1),
(97, 'AC-17.7\r\n', 'Test the remote access controls by attempting to gain remote access to the information system using a valid system account that does not have remote access permissions.\r\n', 97, NULL, NULL, NULL, 1),
(98, 'AC-17.8\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if the organization consistently employs remote access controls for the information system on an ongoing basis.\r\n', 98, NULL, NULL, NULL, 1),
(99, 'AC-17.9\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the remote access control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 99, NULL, NULL, NULL, 1),
(100, 'AC-17.10\r\n', 'Examine organizational records or documents to determine what automated mechanisms and functions are employed to support and facilitate the monitoring and control of remote access methods.\r\n', 100, NULL, NULL, NULL, 1),
(101, 'AC-17.11\r\n', 'Examine organizational records or documents to determine if the automated mechanisms supporting the monitoring and control of remote access are effectively employed in accordance with organizational policy and procedures.\r\n', 101, NULL, NULL, NULL, 1),
(102, 'AC-17.12\r\n', 'Test the automated mechanism(s) within the information system to determine if each of the functions associated with the monitoring and control of remote access produce accurate and informative information, in accordance with remote access monitoring policy and procedures.\r\n', 102, NULL, NULL, NULL, 1),
(103, 'AC-17.13\r\n', 'Interview selected organizational personnel with access control responsibilities and examine the configuration of the information system to determine if the organization uses encryption to protect the confidentiality of remote access sessions.\r\n', 103, NULL, NULL, NULL, 1),
(104, 'AC-17.14\r\n', 'Examine a remote access connection to the information system to determine if the connection requires the use of encryption and encryption is actually employed.\r\n', 104, NULL, NULL, NULL, 1),
(105, 'AC-17.15\r\n', 'Interview selected organizational personnel with access control responsibilities and examine the configuration of the information system to determine if the organization controls remote access through a managed access control point.\r\n', 105, NULL, NULL, NULL, 1),
(106, 'AC-17.16\r\n', 'Test remote access controls by attempting to connect remotely to the information system without connecting through the managed access control point to determine if remote access can be achieved without following organizational policy and procedures.\r\n', 106, NULL, NULL, NULL, 1),
(107, 'IA-5.1\r\n', 'Examine organizational records or documents and the information system configuration settings to determine if the system protects passwords from unauthorized disclosure and modification when stored and transmitted, prohibits passwords from being displayed when entered, enforces password minimum and maximum lifetime restrictions, and prohibits password reuse for a specified number of generations.\r\n', 107, NULL, NULL, NULL, 1),
(108, 'IA-5.2\r\n', 'Examine organizational records or documents to determine if the organization establishes administrative procedures for initial authenticator distribution, for lost/compromised, or damaged authenticators, and for revoking authenticators.\r\n', 108, NULL, NULL, NULL, 1),
(109, 'IA-5.3\r\n', 'Examine organizational records or documents to determine if the organization changes default authenticators upon information system installation.\r\n', 109, NULL, NULL, NULL, 1),
(110, 'IA-5.4\r\n', 'Interview selected organizational personnel with identification and authentication responsibilities to determine if users take reasonable measures to safeguard authenticators including maintaining possession of their individual authenticators, not loaning or sharing authenticators with others, and reporting lost or compromised authenticators immediately.\r\n', 110, NULL, NULL, NULL, 1),
(111, 'IA-5.5\r\n', 'Examine organizational records or documents to determine if the information system establishes user control of the corresponding private key and maps the authenticated identity to the user account (for PKI-based authentication).\r\n', 111, NULL, NULL, NULL, 1),
(112, 'IA-5.6\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the authenticator management control is implemented.\r\n', 112, NULL, NULL, NULL, 1),
(113, 'IA-5.7\r\n', 'Test the information system to determine if the system protects passwords from unauthorized disclosure and modification when stored and transmitted, prohibits passwords from being displayed when entered, enforces password minimum and maximum lifetime restrictions, and prohibits password reuse for a specified number of generations.\r\n', 113, NULL, NULL, NULL, 1),
(114, 'IA-5.8\r\n', 'Interview selected organizational personnel with identification and authentication responsibilities and examine organizational records or documents to determine if the organization consistently manages authenticators for the information system on an ongoing basis.\r\n', 114, NULL, NULL, NULL, 1),
(115, 'IA-5.9\r\n', 'Interview selected organizational personnel with identification and authentication responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the authenticator management control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 115, NULL, NULL, NULL, 1),
(116, '\r\n', '\r\n', 116, NULL, NULL, NULL, 1),
(117, 'AC-3.1\r\n', 'Examine organizational records or documents to determine if user access to the information system is authorized.\r\n', 117, NULL, NULL, NULL, 1),
(118, 'AC-3.2\r\n', 'Examine access control mechanisms to determine if the information system is configured to implement the organizational access control policy.\r\n', 118, NULL, NULL, NULL, 1),
(119, 'AC-3.3\r\n', 'Examine the user access rights on the information system to determine if user privileges on the system are consistent with the documented user authorizations.\r\n', 119, NULL, NULL, NULL, 1),
(120, 'AC-3.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the access enforcement control is implemented.\r\n', 120, NULL, NULL, NULL, 1),
(121, 'AC-3.5\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if the information system consistently enforces assigned authorizations for controlling access to the system on an ongoing basis.\r\n', 121, NULL, NULL, NULL, 1),
(122, 'AC-3.6\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the access enforcement control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 122, NULL, NULL, NULL, 1),
(123, 'AC-3.7\r\n', 'Examine organizational records or documents to determine if the organization explicitly defines security functions for the information system.\r\n', 123, NULL, NULL, NULL, 1),
(124, 'AC-3.8\r\n', 'Examine organizational records or documents to determine if the organization properly authorizes personnel granted access to security functions and information in accordance with organizational policy.\r\n', 124, NULL, NULL, NULL, 1),
(125, 'AC-3.9\r\n', 'Test selected accounts that have access to information system security functions to determine if the user privileges for those accounts function as documented in accordance with authorization requirements.\r\n', 125, NULL, NULL, NULL, 1),
(126, 'AC-4.1\r\n', 'Examine information system interconnection agreements to determine if the agreements address: (i) the types of permissible and impermissible flow of information between systems; and (ii) the required level of authorization to allow information flow as defined in the information flow enforcement policy and procedures.\r\n', 126, NULL, NULL, NULL, 1),
(127, 'AC-4.2\r\n', 'Examine information system configuration settings to determine if controls are in place to restrict the flow of information within the system and between interconnected systems in accordance with the applicable policy, procedures, and assigned authorizations.\r\n', 127, NULL, NULL, NULL, 1),
(128, 'AC-4.3\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the information flow enforcement control is implemented.\r\n', 128, NULL, NULL, NULL, 1),
(129, 'AC-4.4\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if the information system consistently enforces assigned authorizations for controlling the flow of information within the system and between interconnected systems on an ongoing basis.\r\n', 129, NULL, NULL, NULL, 1),
(130, 'AC-4.5\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the information flow enforcement control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 130, NULL, NULL, NULL, 1),
(131, 'AC-6.1\r\n', 'Examine organizational records or documents to determine if the organization assigns the most restrictive set of rights/privileges or accesses needed by users for the performance of specified tasks.\r\n', 131, NULL, NULL, NULL, 1),
(132, 'AC-6.2\r\n', 'Examine organizational records or documents to determine what access rights/privileges the organization assigns to user tasks.\r\n', 132, NULL, NULL, NULL, 1),
(133, 'AC-6.3\r\n', 'Examine selected user accounts on the information system to determine if the access rights/privileges correspond to the authorized permissions on access documentation for specified tasks.\r\n', 133, NULL, NULL, NULL, 1),
(134, 'AC-6.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the least privilege control is implemented.\r\n', 134, NULL, NULL, NULL, 1),
(135, 'AC-6.5\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if the information system consistently enforces the most restrictive set of rights/privileges or accesses needed by users on an ongoing basis.\r\n', 135, NULL, NULL, NULL, 1),
(136, 'AC-6.6\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the least privilege control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 136, NULL, NULL, NULL, 1),
(137, 'AC-13.1\r\n', 'Interview selected organizational personnel with access control responsibilities to determine if the organization supervises and reviews the activities of users of the information system.\r\n', 137, NULL, NULL, NULL, 1),
(138, 'AC-13.2\r\n', 'Examine organizational records or documents to determine if unusual activity is investigated, reported to appropriate officials, and resolved.\r\n', 138, NULL, NULL, NULL, 1),
(139, 'AC-13.3\r\n', 'Examine organizational records of supervisory notices or disciplinary actions to users to determine if the organization is supervising user activities regarding the use and application of information system access controls.\r\n', 139, NULL, NULL, NULL, 1),
(140, 'AC-13.4\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the supervision and review of access control is implemented.\r\n', 140, NULL, NULL, NULL, 1),
(141, 'AC-13.5\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if the organization consistently supervises and reviews user activities with respect to the enforcement and use of access controls for the information system on an ongoing basis.\r\n', 141, NULL, NULL, NULL, 1),
(142, 'AC-13.6\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the supervision and review of access control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 142, NULL, NULL, NULL, 1),
(143, 'AC-13.7\r\n', 'Interview selected organizational personnel with access control responsibilities and examine organizational records or documents to determine if the organization employs automated mechanisms within the information system to support and facilitate the review of user and how those mechanisms are implemented.\r\n', 143, NULL, NULL, NULL, 1),
(144, 'AC-13.8\r\n', 'Examine the configuration of the automated mechanism(s) within the information system to determine if the mechanisms support the review of user activities.\r\n', 144, NULL, NULL, NULL, 1),
(145, 'AC-13.9\r\n', 'Examine the output from the automated mechanism(s) within the information system to determine if each of the automated functions associated with the review of user activities produces accurate and informative information to support and facilitate the review of user activities with respect to access control enforcement and usage.\r\n', 145, NULL, NULL, NULL, 1),
(146, 'AU-2.1\r\n', 'Examine organizational records or documents and the information system configuration settings to determine if the system generates audit records for the organization-defined auditable events.\r\n', 146, NULL, NULL, NULL, 1),
(147, 'AU-2.2\r\n', 'Test the information system by attempting to perform actions that are configured to generate an audit record.\r\n', 147, NULL, NULL, NULL, 1),
(148, 'AU-2.3\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the auditable events control is implemented.\r\n', 148, NULL, NULL, NULL, 1),
(149, 'AU-2.4\r\n', 'Interview selected organizational personnel with audit and accountability responsibilities and examine organizational records or documents to determine if the information system consistently generates audit records for auditable events on an ongoing basis.\r\n', 149, NULL, NULL, NULL, 1),
(150, 'AU-2.5\r\n', 'Interview selected organizational personnel with audit and accountability responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the auditable events control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 150, NULL, NULL, NULL, 1),
(151, 'AU-6.1\r\n', 'Examine organizational records or documents to determine if the organization regularly reviews/analyzes audit records for indications of inappropriate or unusual activity, investigates suspicious activity or suspected violations, reports findings to appropriate officials, and takes necessary actions.\r\n', 151, NULL, NULL, NULL, 1),
(152, 'AU-6.2\r\n', 'Test the audit monitoring, analysis and reporting process to determine if the organization regularly reviews/analyzes audit records for indications of inappropriate or unusual activity, investigates suspicious activity or suspected violations, reports findings to appropriate officials, and takes necessary actions by artificially generating auditable events to cause an audit failure or suspicious activity condition and monitoring how the organization reacts.\r\n', 152, NULL, NULL, NULL, 1),
(153, 'AU-6.3\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the audit monitoring, analysis, and reporting control is implemented.\r\n', 153, NULL, NULL, NULL, 1),
(154, 'AU-6.4\r\n', 'Interview selected organizational personnel with audit and accountability responsibilities and examine organizational records or documents to determine if the organization consistently conducts audit monitoring, analysis, and reporting on an ongoing basis.\r\n', 154, NULL, NULL, NULL, 1),
(155, 'AU-6.5\r\n', 'Interview selected organizational personnel with audit and accountability responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the audit monitoring, analysis, and reporting control are documented and the resulting information used to actively improve the control on a continuous basis.\r\n', 155, NULL, NULL, NULL, 1),
(156, 'AU-6.6\r\n', 'Examine organizational records or documents and the information system configuration to determine if the organization employs automated mechanisms to integrate audit monitoring, analysis, and reporting into  overall process for investigation and response to suspicious activities.\r\n', 156, NULL, NULL, NULL, 1),
(157, 'AU-6.7\r\n', 'Test the information system configuration to determine if the organization employs automated mechanisms to integrate audit monitoring, analysis, and reporting into an overall process for investigation and response to suspicious activities by artificially generating auditable events and monitoring the results.\r\n', 157, NULL, NULL, NULL, 1),
(168, 'AT-2.1\r\n', 'Examine organizational records or documents to determine if: (i) security awareness instruction is provided to all users; (ii) records include the type of instruction received and the date completed; and (iii) initial and refresher instruction is provided in accordance with organization-defined frequency, at least annually.\r\n', 168, NULL, NULL, NULL, 1),
(169, 'AT-2.2\r\n', 'Examine security awareness instructional materials to determine if the materials address the specific requirements of the organization and the information systems to which personnel have authorized access.\r\n', 169, NULL, NULL, NULL, 1),
(170, 'AT-2.3\r\n', 'Examine organizational records or documents to determine if the organization assigns responsibility to specific parties and defines specific actions to ensure that the security awareness control is implemented.\r\n', 170, NULL, NULL, NULL, 1),
(171, 'AT-2.4\r\n', 'Interview selected organizational personnel with security awareness and training responsibilities and examine organizational records or documents to determine if the organization consistently conducts security awareness instruction on an ongoing basis.\r\n', 171, NULL, NULL, NULL, 1),
(172, 'AT-2.5', 'Interview selected organizational personnel with security awareness and training responsibilities and examine organizational records or documents to determine if anomalies or problems encountered by the organization in the implementation of the security awareness control are documented and the resulting information used to actively improve the control on a continuous basis.', 172, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mki_step_results`
--

CREATE TABLE IF NOT EXISTS `mki_step_results` (
  `id_step_result` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(20) NOT NULL,
  `notes` text,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `comment` text,
  `id_step` int(11) DEFAULT NULL,
  `id_user_assesment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_step_result`),
  KEY `fk_step_result_step` (`id_step`),
  KEY `fk_step_result_assesment` (`id_user_assesment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mki_systems`
--

CREATE TABLE IF NOT EXISTS `mki_systems` (
  `id_system` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `number_of_user` int(11) DEFAULT NULL,
  `person_in_charge` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_system`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mki_systems`
--

INSERT INTO `mki_systems` (`id_system`, `name`, `description`, `number_of_user`, `person_in_charge`) VALUES
(1, 'SIPMB', 'SIPMB', 200, 'Caraka');

-- --------------------------------------------------------

--
-- Table structure for table `mki_users`
--

CREATE TABLE IF NOT EXISTS `mki_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role` int(2) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mki_users`
--

INSERT INTO `mki_users` (`id_user`, `username`, `password`, `name`, `role`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', 1),
(2, 'user', '202cb962ac59075b964b07152d234b70', 'User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mki_user_assesments`
--

CREATE TABLE IF NOT EXISTS `mki_user_assesments` (
  `id_user_assesment` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_assesment` int(11) NOT NULL,
  PRIMARY KEY (`id_user_assesment`),
  KEY `fk_user_assesment` (`id_user`),
  KEY `fk_assesment_user` (`id_assesment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1415037461),
('m141103_141845_init_db', 1415037492),
('m141105_060257_update_table_step_result', 1416905510),
('m141124_062606_update_relation_step_result', 1416905511),
('m141125_065320_relasi_standards', 1417962701);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mki_assesments`
--
ALTER TABLE `mki_assesments`
  ADD CONSTRAINT `fk_assesment_standard` FOREIGN KEY (`id_standard`) REFERENCES `mki_standards` (`id_standard`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_step_assesment_system` FOREIGN KEY (`id_system`) REFERENCES `mki_systems` (`id_system`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mki_steps`
--
ALTER TABLE `mki_steps`
  ADD CONSTRAINT `fk_step_standard` FOREIGN KEY (`id_standard`) REFERENCES `mki_standards` (`id_standard`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mki_step_results`
--
ALTER TABLE `mki_step_results`
  ADD CONSTRAINT `fk_step_result_assesment` FOREIGN KEY (`id_user_assesment`) REFERENCES `mki_user_assesments` (`id_user_assesment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_step_result_step` FOREIGN KEY (`id_step`) REFERENCES `mki_steps` (`id_step`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mki_user_assesments`
--
ALTER TABLE `mki_user_assesments`
  ADD CONSTRAINT `fk_assesment_user` FOREIGN KEY (`id_assesment`) REFERENCES `mki_assesments` (`id_assesment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_assesment` FOREIGN KEY (`id_user`) REFERENCES `mki_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
