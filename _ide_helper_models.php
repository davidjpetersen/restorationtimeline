<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Event
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $disambiguatingDescription
 * @property array|null $identifer
 * @property array|null $sameAs
 * @property \Illuminate\Support\Carbon|null $startDate
 * @property \Illuminate\Support\Carbon|null $endDate
 * @property int|null $parentID
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Person[] $people
 * @property-read int|null $people_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Source[] $sources
 * @property-read int|null $sources_count
 * @method static \Database\Factories\EventFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDisambiguatingDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereIdentifer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereParentID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereSameAs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Organization
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $alternativeName
 * @property string|null $description
 * @property string|null $disambiguatingDescription
 * @property array|null $address
 * @property string|null $foundingDate
 * @property array $foundingLocation
 * @property string|null $dissolutionDate
 * @property array $dissolutionLocation
 * @property string|null $faxNumber
 * @property string|null $email
 * @property string|null $telephone
 * @property mixed|null $identifier
 * @property mixed|null $sameAs
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\OrganizationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization query()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereAlternativeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereDisambiguatingDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereDissolutionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereDissolutionLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereFaxNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereFoundingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereFoundingLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereSameAs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereUpdatedAt($value)
 */
	class Organization extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\PageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Person
 *
 * @property int $id
 * @property string|null $honorificPrefix
 * @property string|null $givenName
 * @property string|null $additionalName
 * @property string|null $familyName
 * @property string|null $honorificSuffix
 * @property string|null $maidenName
 * @property string|null $alsoKnownAs
 * @property string|null $address
 * @property string|null $affiliation
 * @property string|null $alumniOf
 * @property string|null $birthDate
 * @property string|null $birthPlace
 * @property string|null $deathDate
 * @property string|null $deathPlace
 * @property string|null $email
 * @property string|null $telephone
 * @property string|null $faxNumber
 * @property string|null $gender
 * @property int|null $height
 * @property int|null $weight
 * @property mixed|null $identifier
 * @property mixed|null $sameAs
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Source[] $creatorOf
 * @property-read int|null $creator_of_count
 * @property-read string $full_name
 * @method static \Database\Factories\PersonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Person query()
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereAdditionalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereAffiliation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereAlsoKnownAs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereAlumniOf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereBirthPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereDeathDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereDeathPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereFamilyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereFaxNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereGivenName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereHonorificPrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereHonorificSuffix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereMaidenName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereSameAs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Person whereWeight($value)
 */
	class Person extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Place
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $alternativeName
 * @property string|null $description
 * @property string|null $disambiguatingDescription
 * @property array|null $address
 * @property string|null $geo
 * @property string|null $faxNumber
 * @property string|null $telephone
 * @property string|null $hasMap
 * @property int|null $isAccessibleForFree
 * @property string|null $latitude
 * @property string|null $logitude
 * @property string|null $logo
 * @property int|null $maximumAttendeeCapacity
 * @property string|null $openingHoursSpecification
 * @property int|null $publicAccess
 * @property string|null $slogan
 * @property string|null $tourBookingPage
 * @property string|null $url
 * @property array|null $identifier
 * @property array|null $sameAs
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\PlaceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Place newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place query()
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereAlternativeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereDisambiguatingDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereFaxNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereGeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereHasMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereIsAccessibleForFree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereLogitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereMaximumAttendeeCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereOpeningHoursSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place wherePublicAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereSameAs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereTourBookingPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereUrl($value)
 */
	class Place extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Source
 *
 * @property int $id
 * @property string $title
 * @property string|null $caption
 * @property string|null $embeddedTextCaption
 * @property string|null $exifData
 * @property string|null $bitrate
 * @property string|null $contentSize
 * @property string|null $contentUrl
 * @property int|null $duration
 * @property string|null $embedUrl
 * @property string|null $encodingFormat
 * @property string|null $endTime
 * @property int|null $height
 * @property string|null $playerType
 * @property string|null $productionCompany
 * @property string|null $regionsAllowed
 * @property string|null $startTime
 * @property string|null $uploadDate
 * @property int|null $width
 * @property string|null $about
 * @property string|null $abstract
 * @property string|null $accessMode
 * @property string|null $accessibilityAPI
 * @property string|null $accessibilityControl
 * @property string|null $accessibilityFeatured
 * @property string|null $accessibilityHazard
 * @property string|null $accessibilitySummary
 * @property string|null $acquireLicensePage
 * @property string|null $archivedAt
 * @property string|null $audio
 * @property string|null $citation
 * @property string|null $copyrightNotice
 * @property string|null $copyrightYear
 * @property string|null $countryOfOrigin
 * @property string|null $creditText
 * @property string|null $datePublished
 * @property string|null $discussionUrl
 * @property string|null $generate
 * @property string|null $alternativeHeadline
 * @property string|null $headline
 * @property string|null $inLanguage
 * @property int|null $isFamilyFriendly
 * @property string|null $keywords
 * @property string|null $publication
 * @property string|null $publisher
 * @property int|null $pageCount
 * @property string|null $publisherImprint
 * @property string|null $text
 * @property string|null $thumbnailUrl
 * @property int|null $timeRequired
 * @property int|null $version
 * @property string|null $description
 * @property string|null $disambiguatingDescription
 * @property mixed|null $identifier
 * @property string|null $status
 * @property string|null $uploadFile
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Source[] $creators
 * @property-read int|null $creators_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Event[] $events
 * @property-read int|null $events_count
 * @method static \Database\Factories\SourceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Source newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Source newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Source query()
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAbstract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAccessMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAccessibilityAPI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAccessibilityControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAccessibilityFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAccessibilityHazard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAccessibilitySummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAcquireLicensePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAlternativeHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereArchivedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereAudio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereBitrate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereCitation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereContentSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereContentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereCopyrightNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereCopyrightYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereCountryOfOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereCreditText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereDatePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereDisambiguatingDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereDiscussionUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereEmbedUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereEmbeddedTextCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereEncodingFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereExifData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereGenerate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereInLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereIsFamilyFriendly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source wherePageCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source wherePlayerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereProductionCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source wherePublication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source wherePublisher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source wherePublisherImprint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereRegionsAllowed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereThumbnailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereTimeRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereUploadDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereUploadFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereWidth($value)
 */
	class Source extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

