<?php

// Resolves a category/item image value to a full asset URL. Static automation-*.php
// definitions store a bare filename meant to live under assets/images/, so those need
// an "images/" prefix added before calling assetUrl(). CMS-backed categories instead
// store whatever the admin pasted into Image Path, which is already a full path rooted
// at either assets/images/ or the Media Library's uploads/ folder — those must be passed
// through as-is, or they'd get a wrong double "images/uploads/..." prefix.
function automationImageUrl(string $image): string
{
    if ($image === '') {
        return '';
    }

    $normalized = ltrim(str_replace('\\', '/', $image), '/');

    if (str_starts_with($normalized, 'images/') || str_starts_with($normalized, 'uploads/')) {
        return assetUrl($normalized);
    }

    return assetUrl('images/' . $normalized);
}

function automationPublicPathAliases(): array
{
    return [
        'automation-air-cylinders-standard-air-cylinders-square-cover.php' => 'products/automation/automation-air-cylinders/automation-air-cylinders-standard-air-cylinders--square-cover',
        'automation-air-cylinders-compact-air-cylinders.php' => 'products/automation/automation-air-cylinders/automation-air-cylinders-compact-air-cylinders',
        'automation-air-cylinders-iso-cylinders.php' => 'products/automation/automation-air-cylinders/automation-air-cylinders-iso-cylinders',
        'automation-air-cylinders-air-gripper.php' => 'products/automation/automation-air-cylinders/automation-air-cylinders-air-gripper',
        'automation-air-cylinders-auto-switch.php' => 'products/automation/automation-air-cylinders/automation-air-cylinders-auto-switch',
        'automation-air-cylinders-auto-switchr.php' => 'products/automation/automation-air-cylinders/automation-air-cylinders-auto-switch',
        'automation-air-preparation-equipment-air-preparation-filters.php' => 'products/automation/automation-air-preparation-equipment/automation-air-preparation-equipment-air-preparation-filters',
        'automation-air-preperation-equipment-air-preparation-filters.php' => 'products/automation/automation-air-preparation-equipment/automation-air-preparation-equipment-air-preparation-filters',
        'automation-air-preparation-equipment-air-dryer.php' => 'products/automation/automation-air-preparation-equipment/automation-air-preparation-equipment-air-dryer',
        'automation-air-preperation-equipment-air-dryer.php' => 'products/automation/automation-air-preparation-equipment/automation-air-preparation-equipment-air-dryer',
        'automation-air-preparation-equipment-auto-drains.php' => 'products/automation/automation-air-preparation-equipment/automation-air-preparation-equipment-auto-drains',
        'automation-air-preperation-equipment-auto-drains.php' => 'products/automation/automation-air-preparation-equipment/automation-air-preparation-equipment-auto-drains',
        'automation-directional-control-valves-pilot-operated-4-5-port-solenoid-valves.php' => 'products/automation/automation-directional-control-valves/automation-directional-control-valves-pilot-operated-4-5-port-solenoid-valves',
        'automation-directional-control-valves-direct-operated-3-4-5-port-solenoid-valves.php' => 'products/automation/automation-directional-control-valves/automation-directional-control-valves-direct-operated-3-4-5-port-solenoid-valves',
        'automation-directional-control-valves-mechanical-valves.php' => 'products/automation/automation-directional-control-valves/automation-directional-control-valves-mechanical-valves',
        'automation-directional-control-valves-finger-valve-hand-valves-residual-relief-3-port-valve.php' => 'products/automation/automation-directional-control-valves/automation-directional-control-valves-finger-valve-hand-valves-residual-relief-3-port-valve',
        'automation-directional-control-valves-blow-guns.php' => 'products/automation/automation-directional-control-valves/automation-directional-control-valves-blow-guns',
        'automation-fittings-and-tubings-fittings-for-general-purposes.php' => 'products/automation/automation-fittings-and-tubings/automation-fittings-and-tubings-fittings-for-general-purposes',
        'automation-fittings-and-tubings-fittings-for-general-purposes-s-couplers-multi-connectors.php' => 'products/automation/automation-fittings-and-tubings/automation-fittings-and-tubings-fittings-for-general-purposes-s-couplers-multi-connectors',
        'automation-fittings-and-tubings-tubing.php' => 'products/automation/automation-fittings-and-tubings/automation-fittings-and-tubings-tubing',
        'automation-fittings-and-tubings-related-products.php' => 'products/automation/automation-fittings-and-tubings/automation-fittings-and-tubings-related-products',
        'automation-flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes.php' => 'products/automation/automation-flow-control-equipment-speed-controllers/automation-flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes',
        'automation-flow-control-equipment-speed-controllers-remote-control-valve.php' => 'products/automation/automation-flow-control-equipment-speed-controllers/automation-flow-control-equipment-speed-controllers-remote-control-valve',
        'automation-pressure-control-equipment-electro-automatic-regulators.php' => 'products/automation/automation-pressure-control-equipment/automation-pressure-control-equipment-electro-automatic-regulators',
        'automation-pressure-control-equipment-regulators.php' => 'products/automation/automation-pressure-control-equipment/automation-pressure-control-equipment-regulators',
        'automation-pressure-control-equipment-booster-regulators.php' => 'products/automation/automation-pressure-control-equipment/automation-pressure-control-equipment-booster-regulators',
        'automation-modular-f.r.l.-units-modular-f.r.l.-units-air-combination.php' => 'products/automation/automation-modular-frl-units/automation-modular-f.r.l.-units-modular-f.r.l.-units-air-combination',
        'automation-modular-f.r.l.-units-filter-regulators.php' => 'products/automation/automation-modular-frl-units/automation-modular-f.r.l.-units-filter-regulators',
        'automation-modular-f.r.l.-units-air-filters.php' => 'products/automation/automation-modular-frl-units/automation-modular-f.r.l.-units-air-filters',
        'automation-modular-f.r.l.-units-regulators.php' => 'products/automation/automation-modular-frl-units/automation-modular-f.r.l.-units-regulators',
        'automation-modular-f.r.l.-units-ac-d.php' => 'products/automation/automation-modular-frl-units/automation-modular-f.r.l.-units-ac-d',
        'automation-vacuum-equipment-vacuum-ejectors-vacuum-ejector.php' => 'products/automation/automation-vacuum-equipment-vacuum-ejectors/automation-vacuum-equipment-vacuum-ejectors-vacuum-ejector',
        'automation-vacuum-equipment-vacuum-ejectors-vacuum-pad.php' => 'products/automation/automation-vacuum-equipment-vacuum-ejectors/automation-vacuum-equipment-vacuum-ejectors-vacuum-pad',
        'automation-switches-sensors-controller-flow-switch.php' => 'products/automation/automation-switches-sensors-controller/automation-switches-sensors-controller-flow-switch',
        'automation-switches-sensors-controller-digital-pressure-switch.php' => 'products/automation/automation-switches-sensors-controller/automation-switches-sensors-controller-digital-pressure-switch',
        'automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers.php' => 'products/automation/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers',
        'automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns.php' => 'products/automation/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns',
        'automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns-air-blowing-equipment.php' => 'products/automation/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns-air-blowing-equipment',
        'automation-process-valves-2-3-port-solenoid-valves-air-operated-valves.php' => 'products/automation/automation-process-valves/automation-process-valves-2-3-port-solenoid-valves-air-operated-valves',
        'automation-electric-actuators-mounting-kit-for-multi-axis-system-lea-series.php' => 'products/automation/automation-electric-actuators/automation-electric-actuators-mounting-kit-for-multi-axis-system-lea-series',
        'automation-electric-actuators-e-actuator-easy-to-operate-integrated-controller.php' => 'products/automation/automation-electric-actuators/automation-electric-actuators-e-actuator-easy-to-operate-integrated-controller',
        'automation-gas-generator-membrane-nitrogen-generator.php' => 'products/automation/automation-gas-generator/automation-gas-generator-membrane-nitrogen-generator',
    ];
}

function automationCategoryPathAliases(): array
{
    return [
        'automation.php' => 'products/automation',
        'automation-air-cylinders.php' => 'products/automation/automation-air-cylinders',
        'automation-air-preparation-equipment.php' => 'products/automation/automation-air-preparation-equipment',
        'automation-directional-control-valves.php' => 'products/automation/automation-directional-control-valves',
        // Segment intentionally differs from the filename: item URLs use "-and-tubings".
        'automation-fittings-tubings.php' => 'products/automation/automation-fittings-and-tubings',
        'automation-flow-control-equipment-speed-controllers.php' => 'products/automation/automation-flow-control-equipment-speed-controllers',
        'automation-pressure-control-equipment.php' => 'products/automation/automation-pressure-control-equipment',
        // Segment intentionally differs: item URLs strip the dots and the trailing dash.
        'automation-modular-f.r.l.-units-.php' => 'products/automation/automation-modular-frl-units',
        'automation-vacuum-equipment-vacuum-ejectors-.php' => 'products/automation/automation-vacuum-equipment-vacuum-ejectors',
        'automation-switches-sensors-controller-.php' => 'products/automation/automation-switches-sensors-controller',
        'automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges.php' => 'products/automation/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges',
        'automation-process-valves.php' => 'products/automation/automation-process-valves',
        'automation-electric-actuators.php' => 'products/automation/automation-electric-actuators',
        'automation-gas-generator.php' => 'products/automation/automation-gas-generator',
    ];
}

function publicPathAliases(): array
{
    return automationCategoryPathAliases() + automationPublicPathAliases();
}

function automationItemRoutes(): array
{
    return [
        'Standard Air Cylinders (Square Cover)' => '/category.php?category=standard-air-cylinders-square-cover',
        'Compact Air Cylinders' => '/category.php?category=compact-air-cylinders',
        'ISO Cylinders' => '/category.php?category=iso-cylinders',
        'Air Gripper' => '/category.php?category=air-gripper',
        'Auto Switch' => '/category.php?category=auto-switch',
        'Air Preparation Filters' => '/category.php?category=air-preparation-equipment-air-preparation-filters',
        'Air Dryer' => '/category.php?category=air-preparation-equipment-air-dryer',
        'Auto Drains' => '/category.php?category=air-preparation-equipment-auto-drains',
        'Auto-Drain' => '/category.php?category=air-preparation-equipment-auto-drains',
        'Pilot Operated 4/5 Port Solenoid Valves' => '/category.php?category=directional-control-valves-pilot-operated-4-5-port-solenoid-valves',
        'Direct Operated 3/4/5 Port Solenoid Valves' => '/category.php?category=directional-control-valves-direct-operated-3-4-5-port-solenoid-valves',
        'Mechanical Valves' => '/category.php?category=directional-control-valves-mechanical-valves',
        'Finger Valve/Hand Valves/Residual Relief 3 Port Valve' => '/category.php?category=directional-control-valves-finger-valve-hand-valves-residual-relief-3-port-valve',
        'Blow Guns' => '/category.php?category=directional-control-valves-blow-guns',
        'Fittings For General Purposes' => '/category.php?category=fittings-and-tubings-fittings-for-general-purposes',
        'Fittings For General Purposes(S Couplers/Multi-Connectors)' => '/category.php?category=fittings-and-tubings-fittings-for-general-purposes-s-couplers-multi-connectors',
        'Tubing' => '/category.php?category=fittings-and-tubings-tubing',
        'Related Products' => '/category.php?category=fittings-and-tubings-related-products',
        'Speed Controllers For General Purposes' => '/category.php?category=flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes',
        'Speed Controllers for General Purposes' => '/category.php?category=flow-control-equipment-speed-controllers-speed-controllers-for-general-purposes',
        'Remote Control Valve' => '/category.php?category=flow-control-equipment-speed-controllers-remote-control-valve',
        'Electro-Pneumatic Regulators' => '/category.php?category=pressure-control-equipment-electro-automatic-regulators',
        'Electro Pneumatic Regulatoers' => '/category.php?category=pressure-control-equipment-electro-automatic-regulators',
        'Mounting Kit for Multi-Axis System' => '/category.php?category=electric-actuators-mounting-kit-for-multi-axis-system-lea-series',
        'e-Actuator Easy to Operate Integrated Controller' => '/category.php?category=electric-actuators-e-actuator-easy-to-operate-integrated-controller',
        'Nitrogen Gas Generator' => '/category.php?category=gas-generator-membrane-nitrogen-generator',
    ];
}

function automationContextItemRoutes(): array
{
    return [
        '/automation-pressure-control-equipment.php' => [
            'Regulators' => '/category.php?category=pressure-control-equipment-regulators',
            'Booster Regulators' => '/category.php?category=pressure-control-equipment-booster-regulators',
        ],
        '/automation-modular-f.r.l.-units-.php' => [
            'Modular F.R.L. Units/Air Combination' => '/category.php?category=modular-f-r-l--units-modular-f-r-l--units-air-combination',
            'Filter Regulators' => '/category.php?category=modular-f-r-l--units-filter-regulators',
            'Air Filters' => '/category.php?category=modular-f-r-l--units-air-filters',
            'Regulators' => '/category.php?category=modular-f-r-l--units-regulators',
            'Modular F.R.L. Units AC D' => '/category.php?category=modular-f-r-l--units-ac-d',
        ],
        '/automation-vacuum-equipment-vacuum-ejectors-.php' => [
            'Vacuum Ejector' => '/category.php?category=vacuum-equipment-vacuum-ejectors-vacuum-ejector',
            'Vacuum Pad' => '/category.php?category=vacuum-equipment-vacuum-ejectors-vacuum-pad',
            'Vacuum pad' => '/category.php?category=vacuum-equipment-vacuum-ejectors-vacuum-pad',
        ],
        '/automation-switches-sensors-controller-.php' => [
            'Flow Switch' => '/category.php?category=switches-sensors-controller-flow-switch',
            'Digital Pressure Switch' => '/category.php?category=switches-sensors-controller-digital-pressure-switch',
        ],
        '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges.php' => [
            'Silencers' => '/category.php?category=silencers-exhaust-cleaners-blow-guns-pressure-gauges-silencers',
            'Blow Guns *Blowing Equipments' => '/category.php?category=silencers-exhaust-cleaners-blow-guns-pressure-gauges-blow-guns',
        ],
        '/automation-process-valves.php' => [
            '2/3 Port Solenoid Valves/Air Operated Valves' => '/category.php?category=process-valves-2-3-port-solenoid-valves-air-operated-valves',
        ],
    ];
}

function automationItemIntroImages(): array
{
    return [
        '/automation-air-cylinders.php' => [
            'Standard Air Cylinders (Square Cover)' => 'Standard Air Cylinders (Square Cover)/standard-air-cyldr-intro.webp',
            'Compact Air Cylinders' => 'Compact-air-cylinders/Compact-Cylinder-CQ2-CDQ2-intro.jpg',
            'ISO Cylinders' => 'ISO-Cylinder/CP96-CP96SD-intro.jpg',
            'Air Gripper' => 'Air-gripper/Parallel Type Air Grippers-intro.jpg',
            'Auto Switch' => 'Auto-switch/Solid-State-Auto-Switch-D-M9-intro.jpg',
        ],
        '/automation-air-preparation-equipment.php' => [
            'Air Preparation Filters' => 'Air-Preparation-Equipment/Air-preparation-filter/AMG.webp',
            'Air Dryer' => 'Air-Preparation-Equipment/Air-dryer/IDFA.webp',
            'Auto Drains' => 'Air-Preparation-Equipment/Auto-Drain/AD402-A.webp',
        ],
        '/automation-directional-control-valves.php' => [
            'Pilot Operated 4/5 Port Solenoid Valves' => 'Directional-control-valve/Pilot-operated-ports/SY3000-9000.webp',
            'Direct Operated 3/4/5 Port Solenoid Valves' => 'Directional-control-valve/Direct-operated-port/VT307-img1.webp',
            'Mechanical Valves' => 'Directional-control-valve/Mechanical-valve/Mechanical-Valves-intro.webp',
            'Finger Valve/Hand Valves/Residual Relief 3 Port Valve' => 'Directional-control-valve/Finger-valve/Finger-valve-intro.webp',
            'Blow Guns' => 'Directional-control-valve/Blow-guns/vmg-img1.webp',
        ],
        '/automation-fittings-tubings.php' => [
            'Fittings For General Purposes' => 'Fittings-tube/Fittings-Generals-compressed/Fitting-KQ2-img1.webp',
            'Fittings For General Purposes(S Couplers/Multi-Connectors)' => 'Fittings-tube/Fittings-General-Purpose-Coupler-compressed/KK-KKH-intro.webp',
            'Tubing' => 'Fittings-tube/Tubing-compressed/tubing-intro.webp',
            'Related Products' => 'Fittings-tube/Related-Product-compressed/TK-intro.webp',
        ],
        '/automation-flow-control-equipment-speed-controllers.php' => [
            'Speed Controllers For General Purposes' => 'Flow-Control-Equipment/Speed-Controllers/Speed-Controllers-for-General-Purposes -intro.webp',
            'Remote Control Valve' => 'Flow-Control-Equipment/Remote control valve/PFES-A-P07-2.webp',
        ],
        '/automation-pressure-control-equipment.php' => [
            'Electro-Pneumatic Regulators' => 'Pressure-Control-Equipment/Electro-Pneumatic/ITV.webp',
            'Regulators' => 'Pressure-Control-Equipment/Regulator/IR.webp',
            'Booster Regulators' => 'Pressure-Control-Equipment/Booster-Regulator/VBA.webp',
        ],
        '/automation-modular-f.r.l.-units-.php' => [
            'Modular F.R.L. Units/Air Combination' => 'Modular-FRL-Unit/Modular-FRL-Unit-Combination/AC-D.webp',
            'Filter Regulators' => 'Modular-FRL-Unit/Filter-Regulator/AW-D.webp',
            'Air Filters' => 'Modular-FRL-Unit/Air-Filters/AF-D.webp',
            'Regulators' => 'Modular-FRL-Unit/Regulators/AR-D.webp',
        ],
        '/automation-vacuum-equipment-vacuum-ejectors-.php' => [
            'Vacuum Ejector' => 'Vaccum-Equipment-Ejectors/Vaccum-Equipment-Ejectors-compressed/Vaccum-Ejector/Vacuum-Ejector-intro.webp',
            'Vacuum Pad' => 'Vaccum-Equipment-Ejectors/Vaccum-Equipment-Ejectors-compressed/Vacuum Pad/vacuum-pad-intro.webp',
        ],
        '/automation-switches-sensors-controller-.php' => [
            'Flow Switch' => 'Switches-Sensors/Flow-Switch/PFMB.webp',
            'Digital Pressure Switch' => 'Switches-Sensors/Digital-Pressure-Switch/ISE20.webp',
        ],
        '/automation-silencers-exhaust-cleaners-blow-guns-pressure-gauges.php' => [
            'Silencers' => 'Silencer-Exhaust-Cleaner/Silencers/AN.webp',
            'Blow Guns *Blowing Equipments' => 'Silencer-Exhaust-Cleaner/Blow-Guns/blow-gun.webp',
        ],
        '/automation-process-valves.php' => [
            '2/3 Port Solenoid Valves/Air Operated Valves' => 'Process-Valve/Port-Solenoid-Valve/23 Port Solenoid ValvesAir Operated Valves.webp',
        ],
        '/automation-electric-actuators.php' => [
            'Mounting Kit for Multi-Axis System' => 'Electric-Actuators/Mounting Kit for Multi-Axis System/Mounting-Kit-400-removebg-preview - img1.webp',
            'e-Actuator Easy to Operate Integrated Controller' => 'Electric-Actuators/e-Actuator Easy to Operate Integrated Controller/EQFSHEQYH-C-C1-4.webp',
        ],
        '/automation-gas-generator.php' => [
            'Nitrogen Gas Generator' => 'Membrane-Nitrogen-Generator.webp',
        ],
    ];
}

function automationCategoryDefinitions(): array
{
    // Every automation category is now fully CMS-backed (see
    // cmsAutomationCategoryDefinitions()) — this list is intentionally empty. Adding,
    // renaming or removing a category or product via the admin CMS needs no matching
    // edit in this file; it flows straight from the database everywhere (category
    // grids, the sidebar/nav/mega-menu, search suggestions, and the sitemap).
    return [];
}

function automationCategoryRoutes(): array
{
    $routes = [];

    foreach (automationCategoryDefinitions() as $category) {
        $routes[$category['slug']] = $category['url'];
    }

    // Also include CMS-backed top-level categories (e.g. Electric Actuators) so their
    // pages still count as "Products" nav active-state, same as the static ones above.
    foreach (cmsAutomationCategoryDefinitions() as $category) {
        $routes[$category['slug']] = $category['url'];
    }

    return $routes;
}

/**
 * Resolves a sidebar/menu "item" to a [label, url] pair, whether it's a plain string
 * (the static automation-*.php categories' shape — label only, URL looked up via
 * automationSidebarItemUrl()) or an array with its own label/url (the shape
 * cmsAutomationCategoryDefinitions() produces for CMS-backed categories).
 *
 * @param array<string, mixed>|string $item
 * @return array{0: string, 1: string}
 */
function automationMenuItemParts($item, string $fallbackUrl): array
{
    if (is_array($item)) {
        return [(string) ($item['label'] ?? ''), (string) ($item['url'] ?? $fallbackUrl)];
    }

    return [$item, automationSidebarItemUrl($item, $fallbackUrl)];
}

function automationSidebarItemUrl(string $item, string $fallbackUrl): string
{
    $contextRoutes = automationContextItemRoutes();

    if (isset($contextRoutes[$fallbackUrl][$item])) {
        return $contextRoutes[$fallbackUrl][$item];
    }

    $routes = automationItemRoutes();

    return $routes[$item] ?? $fallbackUrl;
}

/**
 * Slugs of CMS categories that are already surfaced elsewhere in the static
 * automation-*.php tree and must not also get their own separate top-level card/section
 * on products.php or the sidebar accordion — that would show the same category twice.
 * This covers two cases:
 *  - a category listed as a child item inside a static category's accordion section
 *    (e.g. "Air Gripper" listed under "Air Cylinders" via
 *    automationItemRoutes()/automationContextItemRoutes() pointing at
 *    "/category.php?category=<slug>");
 *  - a CMS category created only to give a static top-level category (e.g. "Air
 *    Cylinders" itself) a real row for breadcrumb-chain purposes — it shares its slug
 *    with the static automationCategoryDefinitions() entry, which already renders its
 *    own top-level card/section.
 */
function automationEmbeddedCmsCategorySlugs(): array
{
    $routes = array_merge(automationItemRoutes(), ...array_values(automationContextItemRoutes()));
    $slugs = [];

    foreach ($routes as $url) {
        if (preg_match('#^/category\.php\?category=([a-z0-9\-]+)$#', $url, $matches) === 1) {
            $slugs[$matches[1]] = true;
        }
    }

    foreach (automationCategoryDefinitions() as $category) {
        $slugs[$category['slug']] = true;
    }

    return $slugs;
}

function cmsAutomationCategoryDefinitions(): array
{
    $content = new PublicContentService();
    $definitions = [];
    $embeddedSlugs = automationEmbeddedCmsCategorySlugs();

    foreach ($content->topLevelCategories() as $cmsCategory) {
        if (isset($embeddedSlugs[$cmsCategory['slug']])) {
            continue;
        }

        $childItems = array_map(
            static fn (array $childCategory): array => [
                'label' => $childCategory['name'],
                'url' => '/category.php?category=' . $childCategory['slug'],
            ],
            $content->childCategoriesOf((int) $cmsCategory['id'])
        );

        $definitions[] = [
            'title' => $cmsCategory['name'],
            'slug' => $cmsCategory['slug'],
            'url' => '/category.php?category=' . $cmsCategory['slug'],
            'image' => ltrim(str_replace('\\', '/', (string) ($cmsCategory['image_path'] ?? '')), '/'),
            'description' => (string) ($cmsCategory['description'] ?? ''),
            'items' => $childItems,
        ];
    }

    return $definitions;
}

function automationSidebarCategories(?string $activeSlug = null): array
{
    $categories = array_merge(automationCategoryDefinitions(), cmsAutomationCategoryDefinitions());

    return array_map(static function (array $category) use ($activeSlug): array {
        $category['active'] = $activeSlug !== null && $category['slug'] === $activeSlug;

        return $category;
    }, $categories);
}

function automationSitemapPaths(): array
{
    $paths = ['/automation.php'];

    foreach (automationCategoryDefinitions() as $category) {
        $categoryUrl = $category['url'] ?? '';

        if ($categoryUrl !== '') {
            $paths[] = $categoryUrl;
        }

        foreach ($category['items'] as $item) {
            $paths[] = automationSidebarItemUrl($item, $categoryUrl);
        }
    }

    // CMS-backed top-level categories (e.g. Electric Actuators) and their children —
    // these aren't in automationCategoryDefinitions() above, so list them here too.
    foreach (cmsAutomationCategoryDefinitions() as $category) {
        $categoryUrl = $category['url'] ?? '';

        if ($categoryUrl !== '') {
            $paths[] = $categoryUrl;
        }

        foreach ($category['items'] as $item) {
            [, $itemUrl] = automationMenuItemParts($item, $categoryUrl);
            $paths[] = $itemUrl;
        }
    }

    return array_values(array_unique($paths));
}

function renderAutomationCategorySidebar(array $categories, string $panelPrefix = 'automation-category-panel'): void
{
    ?>
    <aside class="automation-category-sidebar" aria-label="Automation category list">
        <h2>Category</h2>
        <nav class="automation-category-accordion" data-category-accordion>
            <?php foreach ($categories as $index => $category): ?>
                <?php
                $isActive = (bool) ($category['active'] ?? ($index === 0));
                $panelId = $panelPrefix . '-' . $index;
                $categoryUrl = $category['url'] ?? '/products.php?category=' . ($category['slug'] ?? '');
                ?>
                <div class="automation-category-accordion__item <?= $isActive ? 'is-open' : ''; ?>">
                    <button
                        class="automation-category-accordion__trigger <?= $isActive ? 'is-active' : ''; ?>"
                        type="button"
                        aria-expanded="<?= $isActive ? 'true' : 'false'; ?>"
                        aria-controls="<?= e($panelId); ?>"
                    >
                        <span><?= e($category['title']); ?></span>
                        <?= lucideIcon('chevron-down', 'automation-category-sidebar__icon'); ?>
                    </button>
                    <div class="automation-category-accordion__panel" id="<?= e($panelId); ?>">
                        <?php foreach ($category['items'] as $item): ?>
                            <?php
                            if (is_array($item)) {
                                $itemLabel = $item['label'] ?? '';
                                $itemUrl = $item['url'] ?? $categoryUrl;
                            } else {
                                $itemLabel = $item;
                                $itemUrl = automationSidebarItemUrl($item, $categoryUrl);
                            }
                            ?>
                            <a href="<?= e(appUrl($itemUrl)); ?>"><?= e($itemLabel); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </nav>
    </aside>
    <?php
}
