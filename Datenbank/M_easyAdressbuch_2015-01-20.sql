-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 20. Januar 2015 um 10:03
-- Server Version: 4.1.13
-- PHP-Version: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Datenbank: `usr_web188_2`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ea1_benutzer`
--

CREATE TABLE IF NOT EXISTS `ea1_benutzer` (
  `ID` int(5) NOT NULL default '0',
  `anrede` varchar(4) default NULL COMMENT 'Herr/Frau',
  `name1` varchar(30) NOT NULL default '',
  `name2` varchar(30) default NULL,
  `name3` varchar(30) default NULL,
  `geschlecht` char(1) default NULL COMMENT 'm/w',
  `plz` varchar(8) default NULL COMMENT 'D-69115/CH-6490',
  `ort` varchar(30) default NULL,
  `strasse` varchar(30) default NULL,
  `hausnummer` varchar(5) default NULL COMMENT '12a',
  `telefon` varchar(20) default NULL COMMENT '+49 ((0)6221) 123456-78',
  `telefax` varchar(20) default NULL COMMENT '+49 ((0)6221) 123456-81',
  `mobil` varchar(20) default NULL COMMENT '+49 (0)175 98765432',
  `email` varchar(30) default NULL,
  `website` varchar(50) default NULL,
  `bild` varchar(40) default NULL COMMENT 'md5(Bildername)',
  `geburtstag` date default '0000-00-00' COMMENT 'gaaaanz langer Fleißtext',
  `notiz` text,
  `erstellt_wann` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `geaendert_wann` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `ea1_benutzer`
--

