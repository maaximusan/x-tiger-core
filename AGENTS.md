# X-Tiger Core Plugin — Agent Instructions

## Project structure

This directory is a separate WordPress plugin and a separate Git repository:

```text
wp-content/plugins/x-tiger-core
```

The X-Tiger theme lives separately:

```text
wp-content/themes/X-Tiger
```

## Work area

For plugin tasks, edit only files inside:

```text
wp-content/plugins/x-tiger-core
```

Do not edit the X-Tiger theme without a separate explicit command.

Do not edit WordPress core, third-party plugins, or third-party themes.

## Git rules

Run Git commands only inside:

```text
wp-content/plugins/x-tiger-core
```

The active branch should be `main`.

Do not force-push.

Do not overwrite uncommitted user changes.

## Architecture

Custom Gutenberg blocks live in this plugin, not in the theme.

The plugin owns:

- settings;
- contacts;
- social links;
- schema;
- dynamic blocks;
- integrations;
- AI-readable manifest.

The theme owns visual foundation, templates, parts, patterns, `theme.json`, `style.css`, and `editor-style.css`.

If a block is intended for the X-Tiger theme, its output should use X-Tiger foundation classes where appropriate:

- `xt-section`;
- `xt-grid`;
- `xt-card`;
- `xt-card__marker`;
- `xt-card__actions`.

Do not duplicate theme CSS inside every block.

## Prohibited

Do not copy TheGem/WPBakery shortcodes, CSS, classes, markup, or legacy logic.

Do not add a build step without a separate explicit decision.

Do not create custom blocks in the theme.

Do not use shortcode architecture as the plugin foundation.

## Prompt / skill conflict rule

For tasks that name files, treat them as expected files, not rigid allowed files, unless the user explicitly says the restriction is absolute.

If a skill, architecture document, product document, quality document, or current analysis conflicts with the prompt's file list, stop before editing.

When this happens:

1. Describe the conflict.
2. Explain why the file restriction is risky.
3. Propose a revised plan.
4. Name the additional files that need to change.
5. Wait for explicit confirmation.

Do not hide architecturally wrong code in a permitted file.
