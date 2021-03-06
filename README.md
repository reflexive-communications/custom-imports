# custom-imports

**Extension Archived!**

**Importers moved to separate extensions:**

- [import-bank-account](https://github.com/reflexive-communications/import-bank-account)
- [import-source-record-id](https://github.com/reflexive-communications/import-source-record-id)

## Overview

This extension provides custom importer applications.

- Constribution import where the contact mapping is based on contact custom field. If you want to execute this importer,
  navigate to the `Contributions > Import Contributions (Bank Account)` menu. The data mapping screen provides the
  custom fields as options for contact mapping instead of the legacy contact mapping options.
- Activity import where the source record id mapping is also possible. If you want to execute this importer, navigate to the `Contacts > Import Activities With Source Record Id` menu. The data mapping screen provides the source record id as a new mapping parameter. The import process validates this id, the import will skip the activity if the given source record id does not exists in the CRM system. The import will also skip the activity if the same activity could be found in the system (same source contact, activity type and source record id).

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.4+
* CiviCRM v5.43

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and install it
with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/reflexive-communications/custom-imports.git
cv ext:enable custom-imports
```
