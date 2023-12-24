<?php

// See https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ExtensionArchitecture/FileStructure/ExtLocalconf.html

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:yourextensionkey/Configuration/TsConfig/User/user.tsconfig"'
);
