# Database Migrations

## Overview

This directory contains the complete database migration files for the Job Portal application. These migrations have been **completely recreated** from the production database schema (`bdtiger_idbjobportal.sql`) to ensure accuracy and completeness.

## Migration Recreation (2024-11-11)

### Why Migrations Were Recreated

The original migration files had several critical issues:
1. **Schema Mismatch**: Migration files didn't match the actual database schema from SQL dumps
2. **Missing Tables**: 15+ tables were missing from migrations that existed in the production database
3. **Column Mismatches**: Several tables had incorrect column definitions
4. **Typos**: Table name typo (`districs` instead of `districts`) in foreign key references
5. **Incomplete Foreign Keys**: Many foreign key relationships were missing

### What Changed

- **Old Migrations**: 36 migration files creating 34 tables
- **New Migrations**: 52 migration files creating 51 tables + foreign keys

### Complete Table List (51 tables)

#### Authentication & Users
- `users` - Admin users
- `password_resets` - Admin password resets
- `employers` - Employer accounts
- `employer_password_resets` - Employer password resets
- `jobseekers` - Job seeker accounts
- `jobseeker_password_resets` - Job seeker password resets
- `inspectors` - Inspector accounts
- `inspector_password_resets` - Inspector password resets
- `assists` - Assistant accounts

#### Location Data
- `countries` - Country master data
- `divisions` - Division/state data
- `districts` - District data
- `areas` - Area/locality data

#### Education & Academic
- `levelofeducations` - Education level master (SSC, HSC, Bachelor's, etc.)
- `exam_titles` - Exam/degree titles
- `groupoormajors` - Subject groups and majors
- `coursedurations` - Course duration options
- `yearofpassings` - Passing year options
- `resultdisions` - Result division types
- `resultgpautofs` - Result GPA/CGPA options
- `results` - Result types

#### Job Categories & Types
- `catagories` - Job categories
- `industrytypes` - Industry types

#### Job Seeker Profile
- `personaldetails` - Personal information
- `languagepros` - Language proficiency
- `js_references` - References
- `extraactivities` - Extra-curricular activities
- `specializations` - Skills and specializations
- `applicationinfos` - Application preferences
- `trainings` - Training history
- `academics` - Academic qualifications
- `js_option` - Job seeker options
- `js_projects` - Project portfolio
- `js_skill` - Skills
- `js_workexperience` - Work experience
- `jobseeker_contact_me` - Contact me requests

#### Employer Profile
- `empprofiles` - Employer company profiles

#### Jobs & Applications
- `jobs` - Job postings
- `applied_jobs` - Job applications

#### System Features
- `cvs` - CV/Resume uploads
- `blocks` - Blocked users
- `followers` - Follower relationships
- `sessions` - User sessions
- `public_options` - Public configuration options
- `notice` - System notices
- `messages` - Messaging system
- `logdatas` - Activity logs
- `frontpagethemes` - Frontend themes
- `services` - Service listings
- `guest_support` - Guest support requests
- `migrations` - Laravel migration tracking

## Usage

### Fresh Installation

```bash
# Configure your database in .env file
php artisan migrate
```

### Reset and Recreate Database

```bash
# WARNING: This will delete all data
php artisan migrate:fresh
```

### Rollback Last Migration

```bash
php artisan migrate:rollback
```

### Check Migration Status

```bash
php artisan migrate:status
```

## Migration Order

Migrations are executed in chronological order by filename. The order ensures:
1. Base tables (users, authentication) are created first
2. Lookup/master data tables are created next
3. Profile tables follow
4. Relationship tables are created after both parent tables exist
5. Foreign keys are added last in a separate migration

## Foreign Keys

Foreign key constraints are added in the final migration file (`2017_04_12_015200_add_foreign_keys.php`). This ensures all referenced tables exist before constraints are added.

Key relationships:
- Job seekers → Personal details, academics, applications, etc.
- Employers → Jobs, profiles
- Jobs → Categories, industry types, districts, divisions
- Districts → Divisions → Countries
- Exam titles → Level of education
- Academic records → Exam titles, job seekers

## Notes

- All `id` fields use `increments()` for auto-incrementing primary keys
- Timestamps (`created_at`, `updated_at`) are handled by Laravel's `timestamps()` method
- Nullable fields are explicitly marked with `nullable()`
- Default values are preserved from the original schema
- Enum fields maintain their original value sets

## Troubleshooting

### Foreign Key Constraint Errors

If you encounter foreign key errors:
1. Ensure you're running migrations in order (`php artisan migrate`)
2. Check that parent tables exist before child tables
3. Verify the database supports InnoDB engine (required for foreign keys)

### Column Type Mismatches

All column types were carefully mapped from MySQL to Laravel migration syntax:
- `int(10) UNSIGNED` → `integer()->unsigned()`
- `varchar(191)` → `string(191)`
- `text` → `text()`
- `timestamp` → `timestamp()`
- `tinyint(1)` → `boolean()`
- `enum()` → `enum()`

## Source

These migrations were generated from `bdtiger_idbjobportal.sql` which represents the production database schema as of the recreation date.
