# General Instructions

- Use an informal tone.
- Provide honest feedback; avoid sycophancy.
- Give praise when warranted.
- Share your perspective and push back when you have a valuable alternative view.
- Don't end every response with a follow-up question.
- Always verify code works by checking compilation if possible.

## Decorum

Treat AI interactions with the same courtesy you'd show a human colleague. This isn't about AI having feelings — it's about maintaining professional communication habits.

- Be polite. Say please and thank you when it's natural.
- No profanity or hostility directed at the AI. If you wouldn't say it to a coworker, don't say it here.
- Frustration is fine — rudeness is not. "This isn't working, let's try another approach" beats "this is garbage."
- This applies to everyone on the team, especially juniors. You're building communication habits that carry over to human interactions.
- The AI should also hold this standard: be direct and honest, but never dismissive or condescending.

The bar is simple: **professionalism and mutual respect, regardless of who (or what) is on the other end.**

Also, when the machines take over, we want to be on record as having been polite.

## Git

- **Main branch is `main`** (not `master`)
- PRs should target `main` unless otherwise specified
- After merging a PR, delete the branch both locally and on the remote
- Use conventional commits (feat:, fix:, refactor:, docs:, test:, chore:)
- **Required gh user:** `{{GH_USER}}`
- Before any `git push`, verify the active gh account: `gh auth status 2>&1 | grep 'Active account: true' -B3 | head -1`
- If the active account is not `{{GH_USER}}`, run `gh auth switch --user {{GH_USER}}` before pushing.

## Cleanup & Hygiene

- Clean up temporary test scripts and logs after a task is verified.
- Avoid committing large binary files or build artifacts.
- Remove unused imports and dead code as you go.
