..  include:: /Includes.rst.txt
..  highlight:: php

..  _developer:


=============
Documentation
=============

For each extension, a documentation should be provided. This documentation should
be written in reStructuredText (reST) and should be located in the ``Documentation``
folder of the extension. The documentation should be written in English.

The documentation should be split into the following sections:

* Introduction
* Installation
* Configuration
* Usage
* General (optional)
* Editor
* Developer

This documentation was build and deployed with GitHub Actions.
More about that here: https://github.com/mai-space/action-typo3-documentation-on-github

Developer corner
----------------

Use this section to provide examples of code or detail any information that would be deemed relevant to a developer.

For example explain how a certain feature was implemented.


..  _developer-api:

API
===

How to use the API...

Interfaces
----------

The following list provides information for all necessary interfaces that are
used inside of this documentation. For up to date information, please check
the source code.


..  php:namespace:: Vendor\MyExtension\Interfaces

..  php:class:: ExampleInterface

    Has to be implemented by all ...

    ..  php:method:: methodOne()

        :returntype: string
        :returns: Something important

..  php:class:: AnotherImportantInterface

    Used for ...

    ..  php:class:: RequireJsModuleInterface

    Widgets implementing this interface will add the provided RequireJS modules.
    Those modules will be loaded in dashboard view if the widget is added at least once.

    ..  php:method:: getRequireJsModules()

        Returns a list of RequireJS modules that should be loaded, e.g.::

            return [
                'TYPO3/CMS/MyExtension/ModuleName',
                'TYPO3/CMS/MyExtension/Module2Name',
            ];

        See also :ref:`t3coreapi:requirejs` for further information regarding RequireJS
        in TYPO3 Backend.

        :returntype: array
        :returns: List of modules to require.

    ..  php:method:: setDate($year, $month, $day)

        Set the date.

        :param int $year: The year.
        :param int $month: The month.
        :param int $day: The day.
        :returns: Either false on failure, or the datetime object for method chaining.


Examples
--------

A php example::

    // use \TYPO3\CMS\Core\Utility\GeneralUtility;
    $stuff = GeneralUtility::makeInstance(
        '\\Foo\\Bar\\Utility\\Stuff'
    );
    $stuff->do();

Example in another language:

..  code-block:: javascript
    :linenos:
    :emphasize-lines: 2-4

    $(document).ready(
        function () {
            doStuff();
        }
    );

A YAML example:

..  code-block:: yaml

    services:
      Vendor\Extension\EventListener\YourListener:
        tags:
          - name: event.listener
            identifier: 'your-self-choosen-identifier'
            method: 'methodToConnectToEvent'
            event: Vendor\MyExtension\Event\MyActionEvent
