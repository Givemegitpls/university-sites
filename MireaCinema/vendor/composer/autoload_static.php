<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9056babaaa011d1a4108d22a2661599
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PackageVersions\\' => 16,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
        'J' => 
        array (
            'Jean85\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PackageVersions\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/package-versions-deprecated/src/PackageVersions',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'Jean85\\' => 
        array (
            0 => __DIR__ . '/..' . '/jean85/pretty-package-versions/src',
        ),
    );

    public static $classMap = array (
        'ComposerAutoloaderInitb9056babaaa011d1a4108d22a2661599' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitb9056babaaa011d1a4108d22a2661599' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Jean85\\PrettyVersions' => __DIR__ . '/..' . '/jean85/pretty-package-versions/src/PrettyVersions.php',
        'Jean85\\Version' => __DIR__ . '/..' . '/jean85/pretty-package-versions/src/Version.php',
        'MongoDB\\BulkWriteResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/BulkWriteResult.php',
        'MongoDB\\ChangeStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/ChangeStream.php',
        'MongoDB\\Client' => __DIR__ . '/..' . '/mongodb/mongodb/src/Client.php',
        'MongoDB\\Collection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Collection.php',
        'MongoDB\\Command\\ListCollections' => __DIR__ . '/..' . '/mongodb/mongodb/src/Command/ListCollections.php',
        'MongoDB\\Command\\ListDatabases' => __DIR__ . '/..' . '/mongodb/mongodb/src/Command/ListDatabases.php',
        'MongoDB\\Database' => __DIR__ . '/..' . '/mongodb/mongodb/src/Database.php',
        'MongoDB\\DeleteResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/DeleteResult.php',
        'MongoDB\\Exception\\BadMethodCallException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/BadMethodCallException.php',
        'MongoDB\\Exception\\Exception' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/Exception.php',
        'MongoDB\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/InvalidArgumentException.php',
        'MongoDB\\Exception\\ResumeTokenException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/ResumeTokenException.php',
        'MongoDB\\Exception\\RuntimeException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/RuntimeException.php',
        'MongoDB\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/UnexpectedValueException.php',
        'MongoDB\\Exception\\UnsupportedException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/UnsupportedException.php',
        'MongoDB\\GridFS\\Bucket' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Bucket.php',
        'MongoDB\\GridFS\\CollectionWrapper' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/CollectionWrapper.php',
        'MongoDB\\GridFS\\Exception\\CorruptFileException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/CorruptFileException.php',
        'MongoDB\\GridFS\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/FileNotFoundException.php',
        'MongoDB\\GridFS\\ReadableStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/ReadableStream.php',
        'MongoDB\\GridFS\\StreamWrapper' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/StreamWrapper.php',
        'MongoDB\\GridFS\\WritableStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/WritableStream.php',
        'MongoDB\\InsertManyResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/InsertManyResult.php',
        'MongoDB\\InsertOneResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/InsertOneResult.php',
        'MongoDB\\MapReduceResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/MapReduceResult.php',
        'MongoDB\\Model\\BSONArray' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONArray.php',
        'MongoDB\\Model\\BSONDocument' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONDocument.php',
        'MongoDB\\Model\\BSONIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONIterator.php',
        'MongoDB\\Model\\CachingIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CachingIterator.php',
        'MongoDB\\Model\\CallbackIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CallbackIterator.php',
        'MongoDB\\Model\\ChangeStreamIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/ChangeStreamIterator.php',
        'MongoDB\\Model\\CollectionInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfo.php',
        'MongoDB\\Model\\CollectionInfoCommandIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoCommandIterator.php',
        'MongoDB\\Model\\CollectionInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfo.php',
        'MongoDB\\Model\\DatabaseInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfoLegacyIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfoLegacyIterator.php',
        'MongoDB\\Model\\IndexInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfo.php',
        'MongoDB\\Model\\IndexInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfoIterator.php',
        'MongoDB\\Model\\IndexInfoIteratorIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfoIteratorIterator.php',
        'MongoDB\\Model\\IndexInput' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInput.php',
        'MongoDB\\Operation\\Aggregate' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Aggregate.php',
        'MongoDB\\Operation\\BulkWrite' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/BulkWrite.php',
        'MongoDB\\Operation\\Count' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Count.php',
        'MongoDB\\Operation\\CountDocuments' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CountDocuments.php',
        'MongoDB\\Operation\\CreateCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CreateCollection.php',
        'MongoDB\\Operation\\CreateIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CreateIndexes.php',
        'MongoDB\\Operation\\DatabaseCommand' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DatabaseCommand.php',
        'MongoDB\\Operation\\Delete' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Delete.php',
        'MongoDB\\Operation\\DeleteMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DeleteMany.php',
        'MongoDB\\Operation\\DeleteOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DeleteOne.php',
        'MongoDB\\Operation\\Distinct' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Distinct.php',
        'MongoDB\\Operation\\DropCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropCollection.php',
        'MongoDB\\Operation\\DropDatabase' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropDatabase.php',
        'MongoDB\\Operation\\DropIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropIndexes.php',
        'MongoDB\\Operation\\EstimatedDocumentCount' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/EstimatedDocumentCount.php',
        'MongoDB\\Operation\\Executable' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Executable.php',
        'MongoDB\\Operation\\Explain' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Explain.php',
        'MongoDB\\Operation\\Explainable' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Explainable.php',
        'MongoDB\\Operation\\Find' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Find.php',
        'MongoDB\\Operation\\FindAndModify' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindAndModify.php',
        'MongoDB\\Operation\\FindOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOne.php',
        'MongoDB\\Operation\\FindOneAndDelete' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndDelete.php',
        'MongoDB\\Operation\\FindOneAndReplace' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndReplace.php',
        'MongoDB\\Operation\\FindOneAndUpdate' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndUpdate.php',
        'MongoDB\\Operation\\InsertMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/InsertMany.php',
        'MongoDB\\Operation\\InsertOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/InsertOne.php',
        'MongoDB\\Operation\\ListCollectionNames' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListCollectionNames.php',
        'MongoDB\\Operation\\ListCollections' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListCollections.php',
        'MongoDB\\Operation\\ListDatabaseNames' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListDatabaseNames.php',
        'MongoDB\\Operation\\ListDatabases' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListDatabases.php',
        'MongoDB\\Operation\\ListIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListIndexes.php',
        'MongoDB\\Operation\\MapReduce' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/MapReduce.php',
        'MongoDB\\Operation\\ModifyCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ModifyCollection.php',
        'MongoDB\\Operation\\ReplaceOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ReplaceOne.php',
        'MongoDB\\Operation\\Update' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Update.php',
        'MongoDB\\Operation\\UpdateMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/UpdateMany.php',
        'MongoDB\\Operation\\UpdateOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/UpdateOne.php',
        'MongoDB\\Operation\\Watch' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Watch.php',
        'MongoDB\\Operation\\WithTransaction' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/WithTransaction.php',
        'MongoDB\\Tests\\ClientFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/ClientFunctionalTest.php',
        'MongoDB\\Tests\\ClientTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/ClientTest.php',
        'MongoDB\\Tests\\Collection\\CollectionFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Collection/CollectionFunctionalTest.php',
        'MongoDB\\Tests\\Collection\\CrudSpecFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Collection/CrudSpecFunctionalTest.php',
        'MongoDB\\Tests\\Collection\\FunctionalTestCase' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Collection/FunctionalTestCase.php',
        'MongoDB\\Tests\\CommandObserver' => __DIR__ . '/..' . '/mongodb/mongodb/tests/CommandObserver.php',
        'MongoDB\\Tests\\Command\\ListCollectionsTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Command/ListCollectionsTest.php',
        'MongoDB\\Tests\\Command\\ListDatabasesTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Command/ListDatabasesTest.php',
        'MongoDB\\Tests\\Compat\\PolyfillAssertTrait' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Compat/PolyfillAssertTrait.php',
        'MongoDB\\Tests\\Database\\CollectionManagementFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Database/CollectionManagementFunctionalTest.php',
        'MongoDB\\Tests\\Database\\DatabaseFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Database/DatabaseFunctionalTest.php',
        'MongoDB\\Tests\\Database\\FunctionalTestCase' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Database/FunctionalTestCase.php',
        'MongoDB\\Tests\\DocumentationExamplesTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/DocumentationExamplesTest.php',
        'MongoDB\\Tests\\FunctionalTestCase' => __DIR__ . '/..' . '/mongodb/mongodb/tests/FunctionalTestCase.php',
        'MongoDB\\Tests\\FunctionsTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/FunctionsTest.php',
        'MongoDB\\Tests\\GridFS\\BucketFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/GridFS/BucketFunctionalTest.php',
        'MongoDB\\Tests\\GridFS\\FunctionalTestCase' => __DIR__ . '/..' . '/mongodb/mongodb/tests/GridFS/FunctionalTestCase.php',
        'MongoDB\\Tests\\GridFS\\ReadableStreamFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/GridFS/ReadableStreamFunctionalTest.php',
        'MongoDB\\Tests\\GridFS\\SpecFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/GridFS/SpecFunctionalTest.php',
        'MongoDB\\Tests\\GridFS\\StreamWrapperFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/GridFS/StreamWrapperFunctionalTest.php',
        'MongoDB\\Tests\\GridFS\\WritableStreamFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/GridFS/WritableStreamFunctionalTest.php',
        'MongoDB\\Tests\\Model\\BSONArrayTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/BSONArrayTest.php',
        'MongoDB\\Tests\\Model\\BSONDocumentTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/BSONDocumentTest.php',
        'MongoDB\\Tests\\Model\\BSONIteratorTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/BSONIteratorTest.php',
        'MongoDB\\Tests\\Model\\CachingIteratorTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/CachingIteratorTest.php',
        'MongoDB\\Tests\\Model\\ChangeStreamIteratorTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/ChangeStreamIteratorTest.php',
        'MongoDB\\Tests\\Model\\CollectionInfoTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/CollectionInfoTest.php',
        'MongoDB\\Tests\\Model\\DatabaseInfoTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/DatabaseInfoTest.php',
        'MongoDB\\Tests\\Model\\IndexInfoFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/IndexInfoFunctionalTest.php',
        'MongoDB\\Tests\\Model\\IndexInfoTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/IndexInfoTest.php',
        'MongoDB\\Tests\\Model\\IndexInputTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/IndexInputTest.php',
        'MongoDB\\Tests\\Model\\UncloneableObject' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Model/UncloneableObject.php',
        'MongoDB\\Tests\\Operation\\AggregateFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/AggregateFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\AggregateTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/AggregateTest.php',
        'MongoDB\\Tests\\Operation\\BulkWriteFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/BulkWriteFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\BulkWriteTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/BulkWriteTest.php',
        'MongoDB\\Tests\\Operation\\CountDocumentsFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/CountDocumentsFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\CountDocumentsTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/CountDocumentsTest.php',
        'MongoDB\\Tests\\Operation\\CountFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/CountFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\CountTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/CountTest.php',
        'MongoDB\\Tests\\Operation\\CreateCollectionFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/CreateCollectionFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\CreateCollectionTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/CreateCollectionTest.php',
        'MongoDB\\Tests\\Operation\\CreateIndexesFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/CreateIndexesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\CreateIndexesTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/CreateIndexesTest.php',
        'MongoDB\\Tests\\Operation\\DatabaseCommandFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DatabaseCommandFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DatabaseCommandTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DatabaseCommandTest.php',
        'MongoDB\\Tests\\Operation\\DeleteFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DeleteFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DeleteTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DeleteTest.php',
        'MongoDB\\Tests\\Operation\\DistinctFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DistinctFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DistinctTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DistinctTest.php',
        'MongoDB\\Tests\\Operation\\DropCollectionFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DropCollectionFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DropCollectionTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DropCollectionTest.php',
        'MongoDB\\Tests\\Operation\\DropDatabaseFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DropDatabaseFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DropDatabaseTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DropDatabaseTest.php',
        'MongoDB\\Tests\\Operation\\DropIndexesFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DropIndexesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\DropIndexesTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/DropIndexesTest.php',
        'MongoDB\\Tests\\Operation\\EstimatedDocumentCountTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/EstimatedDocumentCountTest.php',
        'MongoDB\\Tests\\Operation\\ExplainFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ExplainFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ExplainTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ExplainTest.php',
        'MongoDB\\Tests\\Operation\\FindAndModifyFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FindAndModifyFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\FindAndModifyTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FindAndModifyTest.php',
        'MongoDB\\Tests\\Operation\\FindFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FindFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\FindOneAndDeleteTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FindOneAndDeleteTest.php',
        'MongoDB\\Tests\\Operation\\FindOneAndReplaceTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FindOneAndReplaceTest.php',
        'MongoDB\\Tests\\Operation\\FindOneAndUpdateTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FindOneAndUpdateTest.php',
        'MongoDB\\Tests\\Operation\\FindOneFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FindOneFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\FindTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FindTest.php',
        'MongoDB\\Tests\\Operation\\FunctionalTestCase' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/FunctionalTestCase.php',
        'MongoDB\\Tests\\Operation\\InsertManyFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/InsertManyFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\InsertManyTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/InsertManyTest.php',
        'MongoDB\\Tests\\Operation\\InsertOneFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/InsertOneFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\InsertOneTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/InsertOneTest.php',
        'MongoDB\\Tests\\Operation\\ListCollectionNamesFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ListCollectionNamesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ListCollectionsFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ListCollectionsFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ListDatabaseNamesFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ListDatabaseNamesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ListDatabasesFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ListDatabasesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ListIndexesFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ListIndexesFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ListIndexesTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ListIndexesTest.php',
        'MongoDB\\Tests\\Operation\\MapReduceFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/MapReduceFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\MapReduceTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/MapReduceTest.php',
        'MongoDB\\Tests\\Operation\\ModifyCollectionFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ModifyCollectionFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\ModifyCollectionTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ModifyCollectionTest.php',
        'MongoDB\\Tests\\Operation\\ReplaceOneTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/ReplaceOneTest.php',
        'MongoDB\\Tests\\Operation\\TestCase' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/TestCase.php',
        'MongoDB\\Tests\\Operation\\UpdateFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/UpdateFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\UpdateManyTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/UpdateManyTest.php',
        'MongoDB\\Tests\\Operation\\UpdateOneTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/UpdateOneTest.php',
        'MongoDB\\Tests\\Operation\\UpdateTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/UpdateTest.php',
        'MongoDB\\Tests\\Operation\\WatchFunctionalTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/WatchFunctionalTest.php',
        'MongoDB\\Tests\\Operation\\WatchTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/Operation/WatchTest.php',
        'MongoDB\\Tests\\PedantryTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/PedantryTest.php',
        'MongoDB\\Tests\\SpecTests\\ChangeStreamsSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/ChangeStreamsSpecTest.php',
        'MongoDB\\Tests\\SpecTests\\ClientSideEncryptionSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/ClientSideEncryptionSpecTest.php',
        'MongoDB\\Tests\\SpecTests\\CommandExpectations' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/CommandExpectations.php',
        'MongoDB\\Tests\\SpecTests\\CommandMonitoringSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/CommandMonitoringSpecTest.php',
        'MongoDB\\Tests\\SpecTests\\Context' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/Context.php',
        'MongoDB\\Tests\\SpecTests\\CrudSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/CrudSpecTest.php',
        'MongoDB\\Tests\\SpecTests\\DocumentsMatchConstraint' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/DocumentsMatchConstraint.php',
        'MongoDB\\Tests\\SpecTests\\DocumentsMatchConstraintTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/DocumentsMatchConstraintTest.php',
        'MongoDB\\Tests\\SpecTests\\ErrorExpectation' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/ErrorExpectation.php',
        'MongoDB\\Tests\\SpecTests\\FunctionalTestCase' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/FunctionalTestCase.php',
        'MongoDB\\Tests\\SpecTests\\Operation' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/Operation.php',
        'MongoDB\\Tests\\SpecTests\\PrimaryStepDownSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/PrimaryStepDownSpecTest.php',
        'MongoDB\\Tests\\SpecTests\\ReadWriteConcernSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/ReadWriteConcernSpecTest.php',
        'MongoDB\\Tests\\SpecTests\\ResultExpectation' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/ResultExpectation.php',
        'MongoDB\\Tests\\SpecTests\\RetryableReadsSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/RetryableReadsSpecTest.php',
        'MongoDB\\Tests\\SpecTests\\RetryableWritesSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/RetryableWritesSpecTest.php',
        'MongoDB\\Tests\\SpecTests\\TransactionsSpecTest' => __DIR__ . '/..' . '/mongodb/mongodb/tests/SpecTests/TransactionsSpecTest.php',
        'MongoDB\\Tests\\TestCase' => __DIR__ . '/..' . '/mongodb/mongodb/tests/TestCase.php',
        'MongoDB\\UpdateResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/UpdateResult.php',
        'PackageVersions\\FallbackVersions' => __DIR__ . '/..' . '/composer/package-versions-deprecated/src/PackageVersions/FallbackVersions.php',
        'PackageVersions\\Installer' => __DIR__ . '/..' . '/composer/package-versions-deprecated/src/PackageVersions/Installer.php',
        'PackageVersions\\Versions' => __DIR__ . '/..' . '/composer/package-versions-deprecated/src/PackageVersions/Versions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9056babaaa011d1a4108d22a2661599::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9056babaaa011d1a4108d22a2661599::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9056babaaa011d1a4108d22a2661599::$classMap;

        }, null, ClassLoader::class);
    }
}
