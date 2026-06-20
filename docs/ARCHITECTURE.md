# X-Tiger Core Plugin Architecture

## Purpose

X-Tiger Core is the functionality layer for the X-Tiger WordPress platform.

The plugin must stay separate from the X-Tiger block theme. It owns platform data, settings, integrations, dynamic blocks, schema, and automation. The theme owns visual foundation, templates, parts, patterns, and design tokens.

## Theme / Plugin Boundary

The X-Tiger theme owns:

- `theme.json`;
- templates;
- parts;
- patterns;
- visual foundation;
- `style.css`;
- `editor-style.css`.

X-Tiger Core owns:

- settings;
- contacts;
- social links;
- schema;
- dynamic blocks;
- integrations;
- AI-readable manifest.

Do not put custom block code into the theme. Do not duplicate the theme visual foundation inside the plugin.

## Future Modules

### Settings

Central settings for the X-Tiger platform. The first settings model should be small and reversible.

### Contacts

Company contact data: phone, email, address, opening hours, and related CTA defaults.

### Social Links

Managed social profile URLs that can be reused in blocks, schema, and templates.

### Schema

Structured data output for LocalBusiness, contacts, and future SEO/GEO features.

### Blocks

Custom Gutenberg blocks that need dynamic data, settings, schema, integrations, or reuse beyond static patterns.

### Integrations

Connections with analytics, SEO tools, forms, maps, CRM, and future platform services.

### AI Manifest

Machine-readable metadata describing available settings, blocks, patterns, and generation rules.

## First Pilot Block

The first pilot block later should be:

```text
x-tiger/contacts
```

It should be a dynamic block because contacts must eventually come from one site-level source and support schema.
