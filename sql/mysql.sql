#
# Table structure for table `opencontent_broken`
#

CREATE TABLE `opencontent_broken` (
    `reportid` INT(5)           NOT NULL AUTO_INCREMENT,
    `lid`      INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `sender`   INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `ip`       VARCHAR(20)      NOT NULL DEFAULT '',
    PRIMARY KEY (`reportid`),
    KEY `lid` (`lid`),
    KEY `sender` (`sender`),
    KEY `ip` (`ip`)
)
    ENGINE = ISAM
    AUTO_INCREMENT = 3;

# --------------------------------------------------------

#
# Table structure for table `opencontent_cat`
#

CREATE TABLE `opencontent_cat` (
    `cid`    INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    `pid`    INT(5) UNSIGNED NOT NULL DEFAULT '0',
    `title`  VARCHAR(50)     NOT NULL DEFAULT '',
    `imgurl` VARCHAR(150)    NOT NULL DEFAULT '',
    PRIMARY KEY (`cid`),
    KEY `pid` (`pid`)
)
    ENGINE = ISAM
    AUTO_INCREMENT = 154;

# --------------------------------------------------------

#
# Table structure for table `opencontent_links`
#

CREATE TABLE `opencontent_links` (
    `lid`       INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `cid`       INT(5) UNSIGNED  NOT NULL DEFAULT '0',
    `title`     VARCHAR(100)     NOT NULL DEFAULT '',
    `address`   VARCHAR(200)     NOT NULL DEFAULT '',
    `address2`  VARCHAR(100)     NOT NULL DEFAULT 'http://',
    `city`      VARCHAR(80)      NOT NULL DEFAULT '',
    `state`     VARCHAR(6)       NOT NULL DEFAULT 'HTML',
    `zip`       VARCHAR(15)      NOT NULL DEFAULT '1.0',
    `country`   VARCHAR(100)     NOT NULL DEFAULT 'Italiano',
    `phone`     VARCHAR(100)     NOT NULL DEFAULT '',
    `fax`       VARCHAR(100)     NOT NULL DEFAULT '',
    `email`     VARCHAR(100)     NOT NULL DEFAULT '',
    `url`       VARCHAR(250)     NOT NULL DEFAULT 'http://',
    `logourl`   VARCHAR(60)      NOT NULL DEFAULT '',
    `submitter` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `status`    TINYINT(2)       NOT NULL DEFAULT '0',
    `date`      INT(10)          NOT NULL DEFAULT '0',
    `hits`      INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `rating`    DOUBLE(6, 4)     NOT NULL DEFAULT '0.0000',
    `votes`     INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `comments`  INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `premium`   TINYINT(2)       NOT NULL DEFAULT '0',
    PRIMARY KEY (`lid`),
    KEY `cid` (`cid`),
    KEY `status` (`status`),
    KEY `title` (`title`(40))
)
    ENGINE = ISAM
    AUTO_INCREMENT = 1336;

# --------------------------------------------------------

#
# Table structure for table `opencontent_mod`
#

CREATE TABLE `opencontent_mod` (
    `requestid`       INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `lid`             INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `cid`             INT(5) UNSIGNED  NOT NULL DEFAULT '0',
    `title`           VARCHAR(100)     NOT NULL DEFAULT '',
    `address`         VARCHAR(100)     NOT NULL DEFAULT '',
    `address2`        VARCHAR(100)     NOT NULL DEFAULT '',
    `city`            VARCHAR(40)      NOT NULL DEFAULT '',
    `state`           VARCHAR(10)      NOT NULL DEFAULT '',
    `zip`             VARCHAR(15)      NOT NULL DEFAULT '',
    `country`         VARCHAR(100)     NOT NULL DEFAULT '',
    `phone`           VARCHAR(100)     NOT NULL DEFAULT '',
    `fax`             VARCHAR(100)     NOT NULL DEFAULT '',
    `email`           VARCHAR(100)     NOT NULL DEFAULT '',
    `url`             VARCHAR(250)     NOT NULL DEFAULT '',
    `logourl`         VARCHAR(150)     NOT NULL DEFAULT '',
    `premium`         CHAR(2)          NOT NULL DEFAULT '0',
    `description`     TEXT             NOT NULL,
    `modifysubmitter` INT(11) UNSIGNED NOT NULL DEFAULT '0',
    PRIMARY KEY (`requestid`)
)
    ENGINE = ISAM
    AUTO_INCREMENT = 1;


# --------------------------------------------------------

#
# Table structure for table `opencontent_text`
#

CREATE TABLE `opencontent_text` (
    `lid`         INT(11) UNSIGNED NOT NULL DEFAULT '0',
    `description` TEXT             NOT NULL,
    KEY `lid` (`lid`)
)
    ENGINE = ISAM;

# --------------------------------------------------------

#
# Table structure for table `opencontent_votedata`
#

CREATE TABLE `opencontent_votedata` (
    `ratingid`        INT(11) UNSIGNED    NOT NULL AUTO_INCREMENT,
    `lid`             INT(11) UNSIGNED    NOT NULL DEFAULT '0',
    `ratinguser`      INT(11) UNSIGNED    NOT NULL DEFAULT '0',
    `rating`          TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
    `ratinghostname`  VARCHAR(60)         NOT NULL DEFAULT '',
    `ratingtimestamp` INT(10)             NOT NULL DEFAULT '0',
    PRIMARY KEY (`ratingid`),
    KEY `ratinguser` (`ratinguser`),
    KEY `ratinghostname` (`ratinghostname`)
)
    ENGINE = ISAM
    AUTO_INCREMENT = 1;
