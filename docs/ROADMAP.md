# X-Tiger Core Plugin Roadmap

## Phase 1: Plugin Skeleton

- Create the standalone plugin directory.
- Initialize a separate Git repository.
- Add plugin bootstrap.
- Add placeholder module classes.
- Add project docs and agent instructions.
- Do not add custom blocks yet.
- Do not add settings UI yet.
- Do not add a build step yet.

## Phase 2: Contacts Settings Model

- Define the contacts data model.
- Decide which values are site settings and which remain block attributes.
- Add safe settings registration.
- Add sanitization and escaping strategy.
- Add import/export considerations.

## Phase 3: `x-tiger/contacts` Dynamic Block

- Add `block.json`.
- Register the block from metadata.
- Add PHP render output.
- Use X-Tiger foundation classes where appropriate.
- Keep editor UI simple.
- Avoid build tooling until it is explicitly needed.

## Phase 4: Schema

- Add LocalBusiness schema model.
- Reuse contacts settings.
- Avoid duplicate schema if an SEO plugin owns the same output.
- Keep schema output configurable and safe.

## Phase 5: Additional Blocks

Potential future blocks:

- FAQ with schema;
- Stats;
- Pricing;
- Logos;
- Testimonials;
- Team;
- Portfolio / Cases;
- LocalBusiness.
