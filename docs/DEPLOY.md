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

`BEGET_SFTP_PATH` must point to the plugin directory on the Beget test site:

```text
wp-content/plugins/x-tiger-core
```

Use the full remote path required by Beget, but make sure it ends with:

```text
wp-content/plugins/x-tiger-core
```

The workflow refuses to deploy when `BEGET_SFTP_PATH` does not end with the plugin path.

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
