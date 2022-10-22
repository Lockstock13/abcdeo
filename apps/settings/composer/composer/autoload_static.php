<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitSettings
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\Settings\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OCA\\Settings\\Activity\\GroupProvider' => __DIR__ . '/..' . '/../lib/Activity/GroupProvider.php',
        'OCA\\Settings\\Activity\\GroupSetting' => __DIR__ . '/..' . '/../lib/Activity/GroupSetting.php',
        'OCA\\Settings\\Activity\\Provider' => __DIR__ . '/..' . '/../lib/Activity/Provider.php',
        'OCA\\Settings\\Activity\\SecurityFilter' => __DIR__ . '/..' . '/../lib/Activity/SecurityFilter.php',
        'OCA\\Settings\\Activity\\SecurityProvider' => __DIR__ . '/..' . '/../lib/Activity/SecurityProvider.php',
        'OCA\\Settings\\Activity\\SecuritySetting' => __DIR__ . '/..' . '/../lib/Activity/SecuritySetting.php',
        'OCA\\Settings\\Activity\\Setting' => __DIR__ . '/..' . '/../lib/Activity/Setting.php',
        'OCA\\Settings\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\Settings\\BackgroundJobs\\VerifyUserData' => __DIR__ . '/..' . '/../lib/BackgroundJobs/VerifyUserData.php',
        'OCA\\Settings\\Controller\\AdminSettingsController' => __DIR__ . '/..' . '/../lib/Controller/AdminSettingsController.php',
        'OCA\\Settings\\Controller\\AppSettingsController' => __DIR__ . '/..' . '/../lib/Controller/AppSettingsController.php',
        'OCA\\Settings\\Controller\\AuthSettingsController' => __DIR__ . '/..' . '/../lib/Controller/AuthSettingsController.php',
        'OCA\\Settings\\Controller\\AuthorizedGroupController' => __DIR__ . '/..' . '/../lib/Controller/AuthorizedGroupController.php',
        'OCA\\Settings\\Controller\\ChangePasswordController' => __DIR__ . '/..' . '/../lib/Controller/ChangePasswordController.php',
        'OCA\\Settings\\Controller\\CheckSetupController' => __DIR__ . '/..' . '/../lib/Controller/CheckSetupController.php',
        'OCA\\Settings\\Controller\\CommonSettingsTrait' => __DIR__ . '/..' . '/../lib/Controller/CommonSettingsTrait.php',
        'OCA\\Settings\\Controller\\HelpController' => __DIR__ . '/..' . '/../lib/Controller/HelpController.php',
        'OCA\\Settings\\Controller\\LogSettingsController' => __DIR__ . '/..' . '/../lib/Controller/LogSettingsController.php',
        'OCA\\Settings\\Controller\\MailSettingsController' => __DIR__ . '/..' . '/../lib/Controller/MailSettingsController.php',
        'OCA\\Settings\\Controller\\PersonalSettingsController' => __DIR__ . '/..' . '/../lib/Controller/PersonalSettingsController.php',
        'OCA\\Settings\\Controller\\ReasonsController' => __DIR__ . '/..' . '/../lib/Controller/ReasonsController.php',
        'OCA\\Settings\\Controller\\TwoFactorSettingsController' => __DIR__ . '/..' . '/../lib/Controller/TwoFactorSettingsController.php',
        'OCA\\Settings\\Controller\\UsersController' => __DIR__ . '/..' . '/../lib/Controller/UsersController.php',
        'OCA\\Settings\\Controller\\WebAuthnController' => __DIR__ . '/..' . '/../lib/Controller/WebAuthnController.php',
        'OCA\\Settings\\Events\\BeforeTemplateRenderedEvent' => __DIR__ . '/..' . '/../lib/Events/BeforeTemplateRenderedEvent.php',
        'OCA\\Settings\\Hooks' => __DIR__ . '/..' . '/../lib/Hooks.php',
        'OCA\\Settings\\Listener\\AppPasswordCreatedActivityListener' => __DIR__ . '/..' . '/../lib/Listener/AppPasswordCreatedActivityListener.php',
        'OCA\\Settings\\Listener\\GroupRemovedListener' => __DIR__ . '/..' . '/../lib/Listener/GroupRemovedListener.php',
        'OCA\\Settings\\Listener\\UserAddedToGroupActivityListener' => __DIR__ . '/..' . '/../lib/Listener/UserAddedToGroupActivityListener.php',
        'OCA\\Settings\\Listener\\UserRemovedFromGroupActivityListener' => __DIR__ . '/..' . '/../lib/Listener/UserRemovedFromGroupActivityListener.php',
        'OCA\\Settings\\Mailer\\NewUserMailHelper' => __DIR__ . '/..' . '/../lib/Mailer/NewUserMailHelper.php',
        'OCA\\Settings\\Middleware\\SubadminMiddleware' => __DIR__ . '/..' . '/../lib/Middleware/SubadminMiddleware.php',
        'OCA\\Settings\\Search\\AppSearch' => __DIR__ . '/..' . '/../lib/Search/AppSearch.php',
        'OCA\\Settings\\Search\\SectionSearch' => __DIR__ . '/..' . '/../lib/Search/SectionSearch.php',
        'OCA\\Settings\\Sections\\Admin\\Additional' => __DIR__ . '/..' . '/../lib/Sections/Admin/Additional.php',
        'OCA\\Settings\\Sections\\Admin\\Delegation' => __DIR__ . '/..' . '/../lib/Sections/Admin/Delegation.php',
        'OCA\\Settings\\Sections\\Admin\\Groupware' => __DIR__ . '/..' . '/../lib/Sections/Admin/Groupware.php',
        'OCA\\Settings\\Sections\\Admin\\Overview' => __DIR__ . '/..' . '/../lib/Sections/Admin/Overview.php',
        'OCA\\Settings\\Sections\\Admin\\Security' => __DIR__ . '/..' . '/../lib/Sections/Admin/Security.php',
        'OCA\\Settings\\Sections\\Admin\\Server' => __DIR__ . '/..' . '/../lib/Sections/Admin/Server.php',
        'OCA\\Settings\\Sections\\Admin\\Sharing' => __DIR__ . '/..' . '/../lib/Sections/Admin/Sharing.php',
        'OCA\\Settings\\Sections\\Personal\\Groupware' => __DIR__ . '/..' . '/../lib/Sections/Personal/Groupware.php',
        'OCA\\Settings\\Sections\\Personal\\PersonalInfo' => __DIR__ . '/..' . '/../lib/Sections/Personal/PersonalInfo.php',
        'OCA\\Settings\\Sections\\Personal\\Security' => __DIR__ . '/..' . '/../lib/Sections/Personal/Security.php',
        'OCA\\Settings\\Sections\\Personal\\SyncClients' => __DIR__ . '/..' . '/../lib/Sections/Personal/SyncClients.php',
        'OCA\\Settings\\Service\\AuthorizedGroupService' => __DIR__ . '/..' . '/../lib/Service/AuthorizedGroupService.php',
        'OCA\\Settings\\Service\\NotFoundException' => __DIR__ . '/..' . '/../lib/Service/NotFoundException.php',
        'OCA\\Settings\\Service\\ServiceException' => __DIR__ . '/..' . '/../lib/Service/ServiceException.php',
        'OCA\\Settings\\Settings\\Admin\\Delegation' => __DIR__ . '/..' . '/../lib/Settings/Admin/Delegation.php',
        'OCA\\Settings\\Settings\\Admin\\Mail' => __DIR__ . '/..' . '/../lib/Settings/Admin/Mail.php',
        'OCA\\Settings\\Settings\\Admin\\Overview' => __DIR__ . '/..' . '/../lib/Settings/Admin/Overview.php',
        'OCA\\Settings\\Settings\\Admin\\Security' => __DIR__ . '/..' . '/../lib/Settings/Admin/Security.php',
        'OCA\\Settings\\Settings\\Admin\\Server' => __DIR__ . '/..' . '/../lib/Settings/Admin/Server.php',
        'OCA\\Settings\\Settings\\Admin\\Sharing' => __DIR__ . '/..' . '/../lib/Settings/Admin/Sharing.php',
        'OCA\\Settings\\Settings\\Personal\\Additional' => __DIR__ . '/..' . '/../lib/Settings/Personal/Additional.php',
        'OCA\\Settings\\Settings\\Personal\\PersonalInfo' => __DIR__ . '/..' . '/../lib/Settings/Personal/PersonalInfo.php',
        'OCA\\Settings\\Settings\\Personal\\Security\\Authtokens' => __DIR__ . '/..' . '/../lib/Settings/Personal/Security/Authtokens.php',
        'OCA\\Settings\\Settings\\Personal\\Security\\Password' => __DIR__ . '/..' . '/../lib/Settings/Personal/Security/Password.php',
        'OCA\\Settings\\Settings\\Personal\\Security\\TwoFactor' => __DIR__ . '/..' . '/../lib/Settings/Personal/Security/TwoFactor.php',
        'OCA\\Settings\\Settings\\Personal\\Security\\WebAuthn' => __DIR__ . '/..' . '/../lib/Settings/Personal/Security/WebAuthn.php',
        'OCA\\Settings\\Settings\\Personal\\ServerDevNotice' => __DIR__ . '/..' . '/../lib/Settings/Personal/ServerDevNotice.php',
        'OCA\\Settings\\SetupChecks\\CheckUserCertificates' => __DIR__ . '/..' . '/../lib/SetupChecks/CheckUserCertificates.php',
        'OCA\\Settings\\SetupChecks\\LdapInvalidUuids' => __DIR__ . '/..' . '/../lib/SetupChecks/LdapInvalidUuids.php',
        'OCA\\Settings\\SetupChecks\\LegacySSEKeyFormat' => __DIR__ . '/..' . '/../lib/SetupChecks/LegacySSEKeyFormat.php',
        'OCA\\Settings\\SetupChecks\\PhpDefaultCharset' => __DIR__ . '/..' . '/../lib/SetupChecks/PhpDefaultCharset.php',
        'OCA\\Settings\\SetupChecks\\PhpOutputBuffering' => __DIR__ . '/..' . '/../lib/SetupChecks/PhpOutputBuffering.php',
        'OCA\\Settings\\SetupChecks\\SupportedDatabase' => __DIR__ . '/..' . '/../lib/SetupChecks/SupportedDatabase.php',
        'OCA\\Settings\\UserMigration\\AccountMigrator' => __DIR__ . '/..' . '/../lib/UserMigration/AccountMigrator.php',
        'OCA\\Settings\\UserMigration\\AccountMigratorException' => __DIR__ . '/..' . '/../lib/UserMigration/AccountMigratorException.php',
        'OCA\\Settings\\WellKnown\\ChangePasswordHandler' => __DIR__ . '/..' . '/../lib/WellKnown/ChangePasswordHandler.php',
        'OCA\\Settings\\WellKnown\\SecurityTxtHandler' => __DIR__ . '/..' . '/../lib/WellKnown/SecurityTxtHandler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitSettings::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitSettings::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitSettings::$classMap;

        }, null, ClassLoader::class);
    }
}
