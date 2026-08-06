# Animation Guidelines

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Reference Website | https://nepackassociates.co.in/ |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL, Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Document Type | Animation Guidelines |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Design and Frontend Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Design and Frontend Team | Initial Animation Guidelines documentation |

## 1. Introduction

This document defines the Motion and Animation System for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The animation system establishes standards for transitions, hover states, loading feedback, scroll behavior, modal motion, notifications, form feedback, and gallery interactions. Animations should improve usability, provide clear feedback, and support a polished professional experience without distracting users or affecting performance.

## 2. Objectives

The Animation Guidelines are designed to:

- Improve user feedback across interactive components.
- Make navigation, buttons, forms, cards, and galleries feel responsive.
- Support a professional B2B industrial website experience.
- Keep motion subtle, fast, and purposeful.
- Avoid decorative or distracting animation.
- Maintain accessibility for users sensitive to motion.
- Support performance on shared hosting and common devices.
- Establish consistent motion standards for future frontend modules.

## 3. Motion Design Principles

### Simplicity

Animations should be simple and easy to understand. Motion should support interaction clarity rather than visual decoration.

### Consistency

Similar components should use similar motion behavior. Buttons, cards, links, navigation items, and modals should follow predictable transition patterns.

### Performance

Animations should be lightweight and should not cause slow rendering, layout shifts, or unnecessary resource usage.

### Accessibility

Motion must respect users who prefer reduced motion. Essential functionality should never depend only on animation.

### Purposeful Motion

Every animation should serve a purpose, such as confirming an action, showing state change, guiding attention, or improving perceived responsiveness.

## 4. Animation Philosophy

Animations should be used when they:

- Clarify hover, focus, active, loading, or disabled states.
- Confirm user interaction.
- Make interface state changes easier to follow.
- Improve navigation feedback.
- Support loading or lazy-loaded content visibility.
- Help users understand modals, dropdowns, accordions, and tabs.
- Improve gallery browsing or image preview interactions.

Animations should be avoided when they:

- Are purely decorative and do not improve usability.
- Distract from product, inquiry, or CMS tasks.
- Slow down navigation or form submission.
- Create motion sensitivity concerns.
- Autoplay without user intent.
- Cause layout shifts or content jumping.
- Hide or delay important information.
- Make admin workflows feel slower.

Motion rules:

- Fast and subtle.
- Never distracting.
- Never autoplay decorative animations.
- Prioritize usability.
- Maintain accessibility.

## 5. Transition Guidelines

### Buttons

Button transitions should provide quick feedback for hover, focus, active, disabled, and loading states. Motion should feel immediate and not delay action.

### Links

Links may use subtle underline or color transitions to show interactivity. Link underline animation should remain readable and should not obscure text.

### Cards

Cards may use subtle elevation, border, or image emphasis on hover. Card motion should not shift surrounding layout.

### Navigation

Navigation transitions should clarify hover, active, and current page states. Mobile navigation should open and close smoothly without feeling slow.

### Forms

Form transitions should support focus states, validation feedback, and helper text changes. Motion should help users identify active fields and errors.

### Sidebar

Sidebar transitions should support open, close, collapsed, and active states. Admin sidebar motion should remain quick and practical.

### Dropdowns

Dropdown transitions should make opening and closing feel clear. Dropdown motion should not delay option selection.

### Accordions

Accordion transitions should help users understand expansion and collapse. Content should remain accessible and should not jump unexpectedly.

### Tabs

Tab transitions should indicate active content changes. Motion should be minimal and should not hide content for long durations.

### Modals

Modal transitions should indicate overlay entry and exit. Motion should focus attention without creating dramatic effects.

## 6. Hover Effects

### Buttons

Button hover should make the action feel responsive through subtle color, elevation, border, or icon movement changes.

### Cards

Card hover should indicate clickability or emphasis. Product cards, download cards, and dashboard cards may use subtle elevation or border emphasis.

### Navigation

Navigation hover should clearly identify interactive menu items. Active navigation states should remain distinct from hover states.

### Product Cards

Product card hover may emphasize the image, title, or action area. Motion should not distort product images or shift card layout.

### Gallery Items

Gallery item hover may show preview intent, zoom affordance, overlay label, or view action. Image hover should remain professional and subtle.

### Icons

Icon hover should provide clear action feedback, especially for admin table actions and icon-only controls.

### Link Underline Animation

Link underline animation may be used for public page links, footer links, and content links. It should be fast, subtle, and readable.

## 7. Loading Animations

### Page Loader

A page loader may be used only when necessary. It should not delay access to content unnecessarily.

### Skeleton Loader

Skeleton loaders may be used for dynamic content, admin dashboards, AJAX-loaded lists, product cards, or gallery areas.

### Progress Indicators

Progress indicators should be used for actions that take noticeable time, such as file uploads or long admin operations.

### Spinner

Spinners may be used for short waiting states. They should include accessible context where needed.

### Lazy Loading Placeholders

Lazy-loaded images should use placeholders that prevent layout shifts and indicate content is loading.

Loading animations should be calm, lightweight, and functional.

## 8. Scroll Behaviour

### Smooth Scrolling

Smooth scrolling may be used for same-page anchor navigation. It should not interfere with user control or accessibility preferences.

### Back to Top

A back to top button may appear after users scroll sufficiently. It should be easy to discover but not visually intrusive.

### Sticky Header

Sticky header behavior may improve navigation access. It should not consume excessive screen height, especially on mobile.

### Scroll Progress Indicator (Future)

A scroll progress indicator may be considered for long-form pages, blogs, or documentation-style content in future phases.

### Fade-In Sections

Subtle fade-in section behavior may be used for public pages if it does not delay content visibility or create motion sensitivity issues.

### Lazy Loaded Images

Lazy-loaded images should appear smoothly while preserving layout stability and avoiding content jumps.

## 9. Modal Animations

Modal animations should be subtle and focused.

Guidelines:

- Entry motion should help users recognize a focused overlay.
- Exit motion should be quick and clear.
- Background overlay changes should not be visually harsh.
- Confirmation modals should feel immediate and serious.
- Image and PDF preview modals should prioritize content clarity.
- Keyboard focus should move predictably into and out of the modal.

## 10. Notification Animations

Notifications should appear and disappear in a way that users can notice without distraction.

Guidelines:

- Toasts should enter subtly and remain readable long enough.
- Alerts should not animate repeatedly.
- Success messages should feel calm and confirm completion.
- Error messages should be noticeable but not alarming.
- Notifications should not block important workflows unless action is required.

## 11. Form Feedback Animations

Form feedback animations should help users understand field state.

Guidelines:

- Focus transitions should make the active field clear.
- Validation feedback should appear near the affected field.
- Error motion should be subtle and should not shake excessively.
- Success feedback should confirm completed actions.
- File upload progress should provide clear status.
- Disabled and loading states should prevent duplicate submission where appropriate.

## 12. Gallery Animations

Gallery animations should support browsing and previewing visual content.

Guidelines:

- Image hover effects should be subtle.
- Gallery previews should open smoothly.
- Image scaling should not distort content.
- Captions or overlays should remain readable.
- Lazy loading should avoid visible layout jumps.
- Animations should not distract from industrial project or product imagery.

## 13. Accessibility Considerations

### Reduced Motion Support

The animation system should respect reduced motion preferences. Non-essential animation should be minimized or removed for users who prefer reduced motion.

### Motion Sensitivity

Avoid large movement, parallax-heavy effects, continuous motion, or autoplay decorative animation.

### Keyboard Accessibility

Animated components such as dropdowns, accordions, tabs, modals, mobile navigation, and tooltips must remain keyboard accessible.

Accessibility principles:

- Do not rely on motion alone to communicate meaning.
- Preserve visible focus states.
- Do not delay access to content.
- Keep interactions predictable.
- Ensure animated state changes are understandable without animation.

## 14. Performance Considerations

### Hardware Acceleration

Animations should use lightweight properties that render efficiently where possible.

### Avoid Heavy Animations

Avoid complex, long-running, or continuous animations that increase CPU/GPU usage.

### Avoid Layout Thrashing

Animations should not repeatedly trigger layout recalculation or cause visible layout shifts.

### Prefer Transform and Opacity

Motion should prefer transform and opacity concepts where practical because they are generally more performant than layout-affecting changes.

Performance guidelines:

- Keep animations short.
- Avoid unnecessary JavaScript-driven animation.
- Avoid animating large numbers of elements at once.
- Avoid autoplay decorative animation.
- Test animation performance on mobile devices.
- Ensure loading animations do not hide slow content issues.

## 15. Future Expansion

Future animation enhancements may include:

- Page transitions for selected public pages.
- Refined micro-interactions for admin actions.
- Dashboard animations for metrics and data updates.
- Scroll progress indicators for long-form content.
- Advanced gallery preview motion.
- Media library upload progress patterns.
- Inquiry workflow feedback animations.
- Reduced-motion design variants.
- Motion audit during production optimization.

Future animation work should preserve the principles of subtlety, usability, accessibility, and performance.

## 16. Related Documents

This document should be maintained together with the following project documents:

- 01_Design_System.md
- 07_Component_Library.md
- 09_Responsive_Design.md
- 02_Color_System.md
- 03_Typography_System.md
- 04_Grid_and_Layout_System.md
- 05_Spacing_System.md
- 06_Breakpoint_System.md
- 08_Iconography.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] Motion Principles Verified
- [ ] Accessibility Reviewed
- [ ] Performance Reviewed
- [ ] Approved for Next Phase

**End of Document**
