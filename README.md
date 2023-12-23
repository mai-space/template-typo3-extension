# 📜 TYPO3 TEMPLATE EXTENSION

![TYPO3](https://img.shields.io/static/v1?style=for-the-badge&message=V12&color=FF8700&logo=TYPO3&logoColor=white&label=TYPO3)
![DDEV](https://img.shields.io/badge/ready-2CA5E0?style=for-the-badge&logo=docker&logoColor=white&label=DDEV)
![PHPStan](http://img.shields.io/badge/PHPStan-777BB4?style=for-the-badge&logo=php&logoColor=white&label=Level%208)
![GitHub Actions](https://img.shields.io/badge/CI/CD-282a2e?style=for-the-badge&logo=githubactions&logoColor=367cfe&label=Github%20Actions)

## ✨ FEATURES

- ✅ DDEV Setup with commands and testing environment
- ✅ PHPStan Level 8 continuous testing
- ✅ TypoScript Linting
- ✅ EditorConfig Checks and Fixes
- ✅ Documentation Template and Rendering
- ✅ GitHub Actions for CI/CD
- ✅ Generic TYPO3 Extension Template for rapid Development

## 🔧 HOW TO USE

In this section you will find a quick guide on how to use this template.

### 🧪 INSTALLATION & ADAPTATION & CONFIGURATION

1. Getting started
   - Search for ``YourVendorName\\YourExtensionName\\`` and replace with your **vendor** and **extension name**
     - Search for ``yourvendorname/yourextensionname`` and replace with your **vendor** and **extension name**
   - Search for ``yourextensionname`` and replace with your **extension name**
   - Search for ``yourextensionkey`` and replace with your **extension key**
2. Launch the extension in your TYPO3 instance
    - Install TYPO3 environments (thanks to [ddev-for-typo3-extensions](https://github.com/a-r-m-i-n/ddev-for-typo3-extensions))
    ```bash
    ddev install-v12
    ```
   - TYPO3 Login:
     - Username: ``admin``
     - Password: ``Password:joh316`` (also in install tool)

### 🚀 DEPLOYMENT

## 🔮 DEVELOPER GUIDE

### 🖋 LINTING AND CHECKS

You can use the following commands to lint and check your code:

```bash
# If you just want to check for errors in your TypoScript or PHPFiles
ddev composer run check

# Apply editorconfig rules to your files
ddev composer run fix
```

## 🫂 HOW TO CONTRIBUTE

## 🧡 SPECIAL THANKS
