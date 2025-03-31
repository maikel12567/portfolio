# Commit Message Conventions

> This document defines the commit message conventions for our team.

---

## Commit Examples

| Type      | Example |
|-----------|-------------|
| `feat`    | `feat(api): add pagination to product list` |
| `fix`     | `fix(ui): fix button alignment on mobile` |
| `refactor`| `refactor(db): restructure migration files` |
| `docs`    | `docs(readme): update installation guide` |
| `style`   | `style(css): adjust spacing in navbar` |
| `test`    | `test(cart): add unit tests for discount codes` |
| `chore`   | `chore(ci): update GitHub Actions workflow` |
| `perf`    | `perf(api): optimize product query performance` |

---

## Branching Strategy

- Every ticket or feature should have its own branch.
- Use the following naming convention for branches:
  - `feature/<ticket-number>-<short-description>` 
  - `bugfix/<ticket-number>-<short-description>` 
  - `hotfix/<short-description>` for urgent fixes 
- Only merge working and reviewed code into the `main` branch.
- Use pull requests for merging and require code reviews before approval.
- Keep your branch updated with `main` by regularly pulling the latest changes.

