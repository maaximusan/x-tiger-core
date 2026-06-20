# X-Tiger Core Deploy

This plugin is deployed from the standalone `x-tiger-core` GitHub repository to the Beget test WordPress installation.

## Workflow

The deploy workflow is:

```text
.github/workflows/deploy-beget.yml
```

It runs on:

- push to `main`;
- manual `workflow_dispatch`.

## Required GitHub Secrets

Add these secrets to the `maaximusan/x-tiger-core` GitHub repository:

- `BEGET_SFTP_HOST`
- `BEGET_SFTP_USER`
- `BEGET_SFTP_PASSWORD`
- `BEGET_SFTP_PATH`

Do not store secret values in repository files.

## Target Path

`BEGET_SFTP_PATH` must point to the plugin directory on the Beget test site.

For the current Beget SFTP user:

```text
domainc8_xtigerdeploy2
```

the SFTP root is:

```text
/domainc8.beget.tech-00/public_html/wp-content/
```

Recommended secret value:

```text
BEGET_SFTP_PATH=plugins/x-tiger-core
```

The workflow also allows these safe target path forms:

```text
.
plugins/x-tiger-core
wp-content/plugins/x-tiger-core
```

It also allows any relative path ending with:

```text
wp-content/plugins/x-tiger-core
```

Use `.` only when the SFTP user root is already the plugin directory itself.

Use a longer relative path only when the SFTP user root is above the WordPress installation, and make sure it ends with:

```text
wp-content/plugins/x-tiger-core
```

Absolute paths are rejected by the workflow. `BEGET_SFTP_PATH` is always interpreted relative to the SFTP user root.

The workflow refuses to deploy when `BEGET_SFTP_PATH` does not match one of the allowed plugin paths.

## Deploy Exclusions

The workflow does not deploy development and repository files:

- `.git/`
- `.github/`
- `AGENTS.md`
- `README.md`
- `docs/`
- `node_modules/`
- `package.json`
- `package-lock.json`
- `tests/`
- `playwright.config.js`
- `playwright-report/`
- `test-results/`

## Notes

The workflow intentionally does not use `--delete` in the first stage.

There is no build step yet.

Custom blocks are not created or registered by this deploy workflow.
