<?php
/**
 * Configuration
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi;

use Exception;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use RuntimeException;
use SellingPartnerApi\Contract\RequestSignerContract;

/**
 * Configuration Class Doc Comment
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */
class Configuration
{
    /**
     * @const array[string]
     */
    public const REQUIRED_CONFIG_KEYS = [
        "lwaClientId", "lwaClientSecret", "awsAccessKeyId", "awsSecretAccessKey", "endpoint"
    ];

    /**
     * Auth object for the SP API
     *
     * @var Authentication
     */
    protected $auth;

    /**
     * The SP API endpoint. One of the constant values from the Endpoint class.
     *
     * @var array
     */
    protected $endpoint = Endpoint::NA;

    /**
     * User agent of the HTTP request, set to "OpenAPI-Generator/{version}/PHP" by default
     *
     * @var string
     */
    protected $userAgent = 'jlevers/selling-partner-api/5.10.3 (Language=PHP)';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected static $tempFolderPath = null;

    /**
     * @var RequestSignerContract
     */
    protected $requestSigner;

    /**
     * Constructor
     * @param array $configurationOptions
     * @throws Exception
     */
    public function __construct(array $configurationOptions)
    {
        // Make sure all required configuration options are present
        $missingKeys = [];
        foreach (static::REQUIRED_CONFIG_KEYS as $key) {
            if (!isset($configurationOptions[$key])) {
                $missingKeys[] = $key;
            }
        }
        if (count($missingKeys) > 0) {
            throw new RuntimeException("Required configuration values were missing: " . implode(", ", $missingKeys));
        }

        if (
            (isset($configurationOptions["accessToken"]) && !isset($configurationOptions["accessTokenExpiration"])) ||
            (!isset($configurationOptions["accessToken"]) && isset($configurationOptions["accessTokenExpiration"]))
        ) {
            throw new RuntimeException('If one of the `accessToken` or `accessTokenExpiration` configuration options is provided, the other must be provided as well');
        }

        $options = array_merge(
            $configurationOptions,
            [
                "accessToken" => $configurationOptions["accessToken"] ?? null,
                "accessTokenExpiration" => $configurationOptions["accessTokenExpiration"] ?? null,
                "onUpdateCredentials" => $configurationOptions["onUpdateCredentials"] ?? null,
                "roleArn" => $configurationOptions["roleArn"] ?? null,
            ]
        );

        $this->endpoint = $options["endpoint"];
        $this->auth = new Authentication($options);

        $this->setRequestSigner($options["requestSigner"] ?? $this->auth);
    }

    public function getRequestSigner(): RequestSignerContract
    {
        return $this->requestSigner;
    }

    public function setRequestSigner(RequestSignerContract $requestSigner): void
    {
        $this->requestSigner = $requestSigner;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->endpoint["url"];
    }

    /**
     * Gets the stripped-down host (no protocol or trailing slash)
     *
     * @return string Host
     */
    public function getBareHost()
    {
        $host = $this->getHost();
        $noProtocol = preg_replace("/.+\:\/\//", " ", $host);
        return trim($noProtocol, "/");
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new InvalidArgumentException("User-agent must be a string.");
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param ?string $tempFolderPath Temp folder path
     * @return void
     */
    public static function setTempFolderPath(?string $tempFolderPath = null): void
    {
        if ($tempFolderPath === null) {
            static::$tempFolderPath = sys_get_temp_dir();
        } else {
            static::$tempFolderPath = $tempFolderPath;
        }
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public static function getTempFolderPath()
    {
        if (isset(static::$tempFolderPath) || static::$tempFolderPath === null) {
            static::setTempFolderPath();
        }
        return static::$tempFolderPath;
    }

    /**
     * Get the datetime string that was used to sign the most recently signed Selling Partner API request
     *
     * @return \DateTime The current time
     */
    public function getRequestDatetime()
    {
        return $this->auth->formattedRequestTime();
    }

    /**
     * Get LWA client ID.
     * 
     * @return string
     */
    public function getLwaClientId(): ?string
    {
        return $this->auth->getLwaClientId();
    }

    /**
     * Set LWA client ID.
     * 
     * @param string $lwaClientId
     * @return void
     */
    public function setLwaClientId(string $lwaClientId): void
    {
        $this->auth->setLwaClientId($lwaClientId);
    }

    /**
     * Get LWA client secret.
     * 
     * @return string
     */
    public function getLwaClientSecret(): ?string
    {
        return $this->auth->getLwaClientSecret();
    }

    /**
     * Set LWA client secret.
     * 
     * @param string $lwaClientSecret
     * @return void
     */
    public function setLwaClientSecret(string $lwaClientSecret): void
    {
        $this->auth->setLwaClientSecret($lwaClientSecret);
    }

    /**
     * Get LWA refresh token.
     * 
     * @return string
     */
    public function getLwaRefreshToken(): ?string
    {
        return $this->auth->getLwaRefreshToken();
    }

    /**
     * Set LWA refresh token.
     * 
     * @param string|null $lwaRefreshToken
     * @return void
     */
    public function setLwaRefreshToken(?string $lwaRefreshToken = null): void
    {
        $this->auth->setLwaRefreshToken($lwaRefreshToken);
    }

    /**
     * Get AWS access key ID.
     * 
     * @return string
     */
    public function getAwsAccessKeyId(): ?string
    {
        return $this->auth->getAwsAccessKeyId();
    }

    /**
     * Set AWS access key ID.
     * 
     * @param string $awsAccessKeyId
     * @return void
     */
    public function setAwsAccessKeyId(string $awsAccessKeyId): void
    {
        $this->auth->setAwsAccessKeyId($awsAccessKeyId);
    }

    /**
     * Get AWS secret access key.
     * 
     * @return string|null
     */
    public function getAwsSecretAccessKey(): ?string
    {
        return $this->auth->getAwsSecretAccessKey();
    }

    /**
     * Set AWS secret access key.
     * 
     * @param string $awsSecretAccessKey
     * @return void
     */
    public function setAwsSecretAccessKey(string $awsSecretAccessKey): void
    {
        $this->auth->setAwsSecretAccessKey($awsSecretAccessKey);
    }

    /**
     * Get current SP API endpoint.
     *
     * @return array
     */
    public function getEndpoint(): array
    {
        return $this->endpoint;
    }

    /**
     * Set SP API endpoint. $endpoint should be one of the constants from Endpoint.php.
     * 
     * @param array $endpoint
     * @throws RuntimeException
     * @return void
     */
    public function setEndpoint(array $endpoint): void
    {
        if (!array_key_exists('url', $endpoint) || !array_key_exists('region', $endpoint)) {
            throw new RuntimeException('$endpoint must contain `url` and `region` keys');
        }

        $this->endpoint = $endpoint;
        $this->auth->setEndpoint($endpoint);
    }

    /**
     * Sign a request to the Selling Partner API using the AWS Signature V4 protocol.
     *
     * @param Request $request The request to sign
     * @param string $scope The scope of the request, if it's grantless
     *
     * @return Request The signed request
     */
    public function signRequest($request, $scope = null, $restrictedPath = null, $operation = null)
    {
        return $this->requestSigner->signRequest($request, $scope, $restrictedPath, $operation);
    }

    /**
     * Gets the essential information for debugging
     *
     * @param string|null $tempFolderPath The path to the temp folder.
     * @return string The report for debugging
     */
    public static function toDebugReport(?string $tempFolderPath = null)
    {
        if ($tempFolderPath === null) {
            $tempFolderPath = static::getTempFolderPath();
        }
        $report  = 'PHP SDK (SellingPartnerApi) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the OpenAPI document: 2020-11-01' . PHP_EOL;
        $report .= '    SDK Package Version: 5.10.3' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . $tempFolderPath . PHP_EOL;

        return $report;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings()
    {
        return [
            [
                "url" => "https://sellingpartnerapi-na.amazon.com",
                "description" => "No description provided",
            ]
        ];
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param int        $index     index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings($index, $variables = null)
    {
        if (null === $variables) {
            $variables = [];
        }

        $hosts = $this->getHostSettings();

        // check array index out of bound
        if ($index < 0 || $index >= count($hosts)) {
            throw new InvalidArgumentException("Invalid index $index when selecting the host. Must be less than ".count($hosts));
        }

        $host = $hosts[$index];
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (in_array($variables[$name], $variable["enum_values"], true)) { // check to see if the value is in the enum
                    $url = str_replace("{".$name."}", $variables[$name], $url);
                } else {
                    throw new InvalidArgumentException("The variable `$name` in the host URL has invalid value ".$variables[$name].". Must be ".implode(',', $variable["enum_values"]).".");
                }
            } else {
                // use default value
                $url = str_replace("{".$name."}", $variable["default_value"], $url);
            }
        }

        return $url;
    }
}
